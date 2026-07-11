<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_api extends CI_Controller {

    public function __construct() {
		parent::__construct();

		$this->load->model('Product_model');

		$allowedOrigins = [
			"http://localhost:5173",
			"https://fe-technologia-git-main-rifky-danu-asmoros-projects.vercel.app",
			// nanti tambahkan domain production jika berubah
			// "https://fe-technologia.vercel.app"
		];

		$origin = $_SERVER['HTTP_ORIGIN'] ?? '';

		if (in_array($origin, $allowedOrigins, true)) {
			header("Access-Control-Allow-Origin: $origin");
		}

		header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
		header("Access-Control-Allow-Headers: Content-Type, Authorization");
		header("Access-Control-Allow-Credentials: true");
		header("Content-Type: application/json");

		if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
			http_response_code(200);
			exit;
		}
	}

    public function get_new_arrival() {
        echo json_encode($this->Product_model->get_products_by_type('products'));
    }

    public function get_best_seller() {
        echo json_encode($this->Product_model->get_products_by_type('best_seller'));
    }

    public function get_on_sale() {
        echo json_encode($this->Product_model->get_products_by_type('on_sale'));
    }
}
