<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		// $data['title'] = "Title";
        // $data['heading'] = "Heading";
		
		$data['blogs'] = array(
			array(
				'id'=>1,
				'thumbnail'=>'image-1.jpg',
				'title'=>'It is a long established fact ',
				'body'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source'
			),
			array(
				'id'=>2,
				'title'=>'scrambled it to make a type specimen',
				'thumbnail'=>'image-2.jpg',
				'body'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source'
			),
			array(
				'id'=>3,
				'title'=>'Good and Evil) by Cicero',
				'thumbnail'=>'image-3.jpg',
				'body'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source'
			),
			array(
				'id'=>4,
				'title'=>'Lorem Ipsum which looks reasonable',
				'thumbnail'=>'image-4.jpg',
				'body'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source'
			),
			array(
				'id'=>5,
				'title'=>'comes from a line in section 1.10.32',
				'thumbnail'=>'image-5.jpg',
				'body'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source'
			),
			array(
				'id'=>6,
				'title'=>'discovered the undoubtable source',
				'thumbnail'=>'image-6.jpg',
				'body'=>'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source'
				)
		);
		
		 
		$this->load->view('welcome_message',$data);
	}
}
