<?php
/*
class Mycal extends CI_Controller{

	function display($year = null, $month = null){

		$conf = array(
			'start_day' => 'monday',
			'show_next_prev' => true,
            3  => 'http://example.com/news/article/2006/06/03/',
            17 => 'bar',
			'next_prev_url' => base_url() . 'mycal/display'
		);


        $this->load->library('calendar', $conf);

		$events = array (
			3  => 'http://example.com/news/article/2006/06/03/',
			17 => 'bar'
		);

        /*$prefs['template'] =

        '{table_open}<div class="table-responsive"><table border="0" cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered calendar">{/table_open}

        {heading_row_start}<tr>{/heading_row_start}

        {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
        {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
        {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

        {heading_row_end}</tr>{/heading_row_end}

        {week_row_start}<tr class="days">{/week_row_start}
        {week_day_cell}<td>{week_day}</td>{/week_day_cell}
        {week_row_end}</tr>{/week_row_end}

        {cal_row_start}<tr>{/cal_row_start}
        {cal_cell_start}<td>{/cal_cell_start}
        {cal_cell_start_today}<td>{/cal_cell_start_today}
        {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

        {cal_cell_content}
            <div class="day_num">{day}</div>
            <div class="content">{content}</div>
        {/cal_cell_content}
        {cal_cell_content_today}
            <div class="day_num highlight">{day}</div>
            <div class="content">{content}</div>
        {/cal_cell_content_today}

        {cal_cell_no_content}<div class="day_num">{day}</div>{/cal_cell_no_content}
        {cal_cell_no_content_today}<div class="day_num highlight">{day}</div>{/cal_cell_no_content_today}

        {cal_cell_blank}&nbsp;{/cal_cell_blank}

        {cal_cell_other}{day}{/cal_cel_other}

        {cal_cell_end}</td>{/cal_cell_end}
        {cal_cell_end_today}</td>{/cal_cell_end_today}
        {cal_cell_end_other}</td>{/cal_cell_end_other}
        {cal_row_end}</tr>{/cal_row_end}

        {table_close}</table>{/table_close}
';


        //$this->load->library('calendar', $prefs);
		//$this->load->library('calendar', $conf);
		//echo $data['calendar'] = $this->calendar->generate($year, $month, $events);   

		//echo $this->calendar->generate($year,$month,$events);
        echo $this->calendar->generate($year,$month,$conf);

	}

}
*/



class Mycal extends CI_Controller{

	function display($year = null, $month = null){

		$this->load->model('Mycal_Model'); 

		$data['calendar'] = $this->Mycal_model->generate($year, $month);

        $this->load->view('templates/header');
		$this->load->view('mycal', $data);
        $this->load->view('templates/footer');

	}

}