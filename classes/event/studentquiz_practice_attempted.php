<?php
namespace mod_studentquiz\event;

defined('MOODLE_INTERNAL') || die();


class studentquiz_practice_attempted extends \core\event\base {

    protected function init() {
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
        $this->data['objecttable'] = 'studentquiz';
    }

    public function get_description() {
        return "On course: {$this->courseid} studentquizid: {$this->objectid} was attempted";
    }

    public function get_url() {
        return new \moodle_url('/mod/studentquiz/view.php', array('id' => $this->objectid));
    }

}