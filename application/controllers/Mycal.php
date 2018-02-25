<?php
class Mycal extends CI_Controller{

	function display($year = null, $month = null){

		$conf = array(
			'start_day' => 'monday',
			'show_next_prev' => true,
			'next_prev_url' => base_url() . 'mycal/display'
		);

		$this->load->library('calendar', $conf);

		$events = array (
			15 => 'foo',
			17 => 'bar'
		);

		$this->conf['template'] = '{table_open}<div class="table-responsive"><table border="0" cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered calendar">{/table_open}
            
            {heading_row_start}<tr>{/heading_row_start}
            

            {heading_title_cell}<th class="text-center" colspan="{colspan}">{heading}</th>{/heading_title_cell}
            
            {heading_row_end}</tr>{/heading_row_end}
            
            {week_row_start}<tr >{/week_row_start}
            {week_day_cell}<td class="text-center" style="height: 5rem;">{week_day}</td>{/week_day_cell}
            {week_row_end}</tr>{/week_row_end}
            
            {cal_row_start}<tr class="days">{/cal_row_start}
            {cal_cell_start}<td class="day">{/cal_cell_start}
            
            {cal_cell_content}
                <div class="day_number">{day}</div>
                <div class="content" style="margin-top: 0;">{content}</div>
            {/cal_cell_content}
            {cal_cell_content_today}
                <div class="day_number highlight">{day}</div>
                <div class="content" style="margin-top: 0;">{content}</div>
            {/cal_cell_content_today}
            
            {cal_cell_no_content}
            <div class="day_number">{day}</div>
            {/cal_cell_no_content}
            {cal_cell_no_content_today}
            <div class="day_number highlight">{day}</div>
            {/cal_cell_no_content_today}
            {cal_cell_blank}&nbsp;{/cal_cell_blank}
            
            {cal_cell_end}</td>{/cal_cell_end}
            {cal_row_end}</tr>{/cal_row_end}
            
            {table_close}</table></div>{/table_close}';

		//$this->load->library('calendar', $conf);
		//echo $data['calendar'] = $this->calendar->generate($year, $month, $events);

		echo $this->calendar->generate($year,$month);

	}

}
/*
<?php
class Mycal extends CI_Controller{

	function display($year = null, $month = null){

		$this->load->model('Mycal_Model'); 

		$data['calendar'] = $this->Mycal_model->generate($year, $month);

		$this->load->view('mycal', $data);

	}

}

*/