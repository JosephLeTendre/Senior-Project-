<?php
class Mycal_model extends CI_Model{

            /*function get_calendar_data($year, $month){
            //$query = $this->db->query("SELECT date, EventName FROM events LIKE date, $year-$month, ;");
            //$query = $this->db->select('date, data')->from('calendar')->like('date', "$year-$month", 'after')->get();
            $query = $this->db->select('date, eventName')->from('events')->like('date', "$year-$month", 'after')->get();
            $cal_data = array();
            foreach ($query->result() as $row){
                $cal_data[substr($row->Date,8,2)] = $row->EventName;
            }
            return $cal_data;
        }*/

    function generate ($year, $month){
            $conf = array(
            'show_next_prev' => true,
            'next_prev_url' => base_url() . 'mycal/display',
            'template' => '{table_open}<div class="table-default"><table border="0" cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered calendar text-primary">{/table_open}
            
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
            
            {table_close}</table></div>{/table_close}'
        );
        $this->load->library('calendar', $conf);
        /*$cal_data = array(
            15 => 'foo',
            17 => 'bar'
        );*/

            $query = $this->db->query("SELECT eventName, date FROM events;");
            $cal_data = array();
            foreach ($query->result() as $row){
                $cal_data[substr($row->date,20,3)] = $row->eventName;
            }

        //$cal_data = $this->get_calendar_data($year, $month);

        return $this->calendar->generate($year,$month, $cal_data);
    }
}