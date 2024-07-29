//====التحويل من 12 ساعة إلى 24 ساعة والعكس======
<?php


function convert_time($time) {
    // write your code here
if ($time === '12:00 am') {
        return '0:00';
    }
    
        if (stripos($time, 'am') !== false || stripos($time, 'pm') !== false) {
       
        list($hour, $ampm) = explode(' ', $time);
        list($hour, $minute) = explode(':', $hour);
        $hour = ($ampm === 'pm' && $hour < 12) ? $hour + 12 : $hour;
        return sprintf('%02d:%02d', $hour, $minute);
    } else {
       
        list($hour, $minute) = explode(':', $time);
        if ($hour == 0) {
            return '12:' . sprintf('%02d', $minute) . ' am';
        } elseif ($hour < 12) {
            return $hour . ':' . sprintf('%02d', $minute) . ' am';
        } elseif ($hour == 12) {
            return '12:' . sprintf('%02d', $minute) . ' pm';
        } else {
            $hour -= 12;
            return $hour . ':' . sprintf('%02d', $minute) . ' pm';
        }
    }
}


?>
