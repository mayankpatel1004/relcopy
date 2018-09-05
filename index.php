<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Relcopy Title</title>
<link rel="stylesheet" type="text/css" href="jquery-ui.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.relcopy.yii.5.0.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript" src="jquery-ui-timepicker-addon-1.4.1.js"></script>
<script type="text/javascript">
/*&lt;![CDATA[*/
mmfRecordCount=0
/*]]&gt;*/
</script>
<script type="text/javascript">
/*<![CDATA[*/
jQuery(function(jQuery) {
jQuery('#id_esc').relCopy({'limit':5,'afterNewId':'if(this.hasClass(\'hasDatepicker\')) {this.removeClass(\'hasDatepicker\'); this.datetimepicker(jQuery.extend({showMonthAfterYear:false},  {\'dateFormat\':\'mm/dd/yy\',\'showAnim\':\'fold\',\'changeYear\':true,\'changeMonth\':true}));};','limitText':'The limit is reached'});

/*jQuery('#EventEscdate_escape_date').datetimepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['en_us'], {'dateFormat':'mm/dd/yy','showAnim':'fold','changeYear':true,'changeMonth':true}));*/

jQuery('#date_one').datetimepicker({
	timeFormat: 'HH:mm:ss',
	stepHour: 2,
	stepMinute: 10,
	stepSecond: 10
});

jQuery('#date_two').datetimepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['en_us'], {'dateFormat':'mm/dd/yy','showAnim':'fold','changeYear':true,'changeMonth':true}));

jQuery('#date_three').datetimepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['en_us'], {'dateFormat':'mm/dd/yy','showAnim':'fold','changeYear':true,'changeMonth':true}));

jQuery('#time_picker').timepicker();

});
/*]]>*/
</script>
</head>

<body>
<div class="row-fluid hide-div">
  <form name="frm" method="post" action="">
    <button type="button" name="yt3" rel=".id_esc_copy" tabindex="7" id="id_esc" class="btn">Add Escape Date</button>
    <input type="hidden" name="yform_e8add5b8[]" value="1">
    <div class="div_pvalues span3 mmf_additem"></div>
    <div class="id_esc_copy">
      <div class="div_pvalues span3">
        <input type="text" name="EventEscdate[]" id="date_one" class="tt_focus_top span12" readonly="readonly" />
        <input type="text" name="EventEscdatea[]" id="date_two" class="tt_focus_top span12" readonly="readonly" />
        <input type="text" name="EventEscdateab[]" id="date_three" class="tt_focus_top span12" readonly="readonly" />
        <input type="text" name="time[]" id="time_picker" class="tt_focus_top span12" readonly="readonly" />
        <input type="text" name="name[]" value="" />
        <textarea name="desc[]"></textarea>
        <select name="status[]">
          <option value="1">Active</option>
          <option value="2">Inactive</option>
        </select>
        <a href="#" onclick="if(confirm('Delete this item?')) if($(this).parent().parent().attr('id')=='id_esc_copytemplate') {clearAllInputs($('#id_esc_copytemplate'));$(this).parent().parent().hide()} else $(this).parent().parent().remove(); mmfRecordCount--; return false;" class="btn mmf_removelink">Remove</a>
      </div>
    </div>
  </form>
</div>
</body>
</html>