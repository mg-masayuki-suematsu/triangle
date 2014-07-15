<?php
/****************************/
/*  IndexController         */
/*  @sins 2014/02/25        */
/*  @auther Masayuki        */
/*  @LastUpdate 2014/02/25  */
/****************************/
class Index extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('parser');
		$this->load->library('email');
	}

	public function index()
	{
		$headerdata['title'] = "TRIANGLE";
		$data['error'] = "";

		if($this->input->post()) {
			$name = $this->input->post('name');
			$from = $this->input->post('from');
			$message = $this->input->post('message');

			if(!empty($from) && !empty($message) && !empty($name)) {
				$res = $this->_sendmail($name, $from, $message);
				if(!$res) {
					$data['error'] = "送信エラー";
					$data['mes_style'] = "error";
				} else {
					$data['error'] = "送信が完了しました！";
					$data['mes_style'] = "ok";
				}
			} else {
				$data['error'] = "自分のアドレス・お名前・メッセージを入力してください";
				$data['mes_style'] = "error";
			}
		}

		// ビューの読み込み・データ渡し
		$this->parser->parse('common/header', $headerdata);
		$this->parser->parse('index', $data);
	}

	public function _sendmail($name, $to, $message) {
		$this->email->from($to, $name);
		$this->email->to('kana_s_1031@yahoo.co.jp');
		
		$this->email->subject('【ホームページからのお問い合わせ】'.$name.'より');
		$this->email->message($message);

		if($this->email->send()) {
			return true;
		} else {
			return false;
		}
	}
}
