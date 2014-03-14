<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form TbActiveForm */

$this->pageTitle=Yii::app()->name . ' - Kontakt';
?>

<section class="contact">
    <h2>Lokalizacja - czyli gdzie można nas znaleźć :-)</h2>
    <p>
        Św. Barbary 10<br />
        Warszawa, 00-686 <br /><br />
        Piętro 12, pokój T810 (półpiętro między piętrem 11 a 12)* <br />
        * Aby się do nas dostać, należy wjechać windą na piętro 12 następnie zejść klatką schodową na półpiętro.
    </p>
    <div id="map_canvas" style="width:500px; height:500px"></div>
    <script type="text/javascript">
        function initialize() { 
            var latlng = new google.maps.LatLng(52.227569, 21.009066);
            var options = { zoom: 18, center: latlng, mapTypeId: google.maps.MapTypeId.SATELLITE};
            var map = new google.maps.Map(document.getElementById("map_canvas"), options);
            var marker = new google.maps.Marker({ position: latlng, map: map, title: "Jesteśmy w tym budynku :-)" });
            var boxText = document.createElement("div");
            boxText.style.cssText = "border: 1px solid black; margin-top: 8px; background: white; padding: 5px;";
            boxText.innerHTML = "Stary budynek TP<br>Tutaj jesteśmy :-)";

            var myOptions = {
                content: boxText
               , disableAutoPan: false
               , maxWidth: 0
               , pixelOffset: new google.maps.Size(0, 0)
               , zIndex: null
               , boxStyle: {
                   background: "url('dodac_obrazek_tutaj.gif') no-repeat"
                 , opacity: 0.75
                 , width: "180px"
               }
               , closeBoxMargin: "10px 2px 2px 2px"
               , closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
               , infoBoxClearance: new google.maps.Size(1, 1)
               , isHidden: false
               , pane: "floatPane"
               , enableEventPropagation: false
            };

            var ib = new InfoBox(myOptions);
            ib.open(map, marker);
        }
        $(function () { 
            initialize(); 
        }); 
    
    </script> 
</section>


<?php if(Yii::app()->user->hasFlash('contact')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('contact'),
    )); ?>

<?php else: ?>

</br>
<p>
Skontaktuj się z nami. W tym celu skorzystaj z poniższego formularza.
</p>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Pola oznaczone <span class="required">*</span> są wymagane.</p>

	<?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldRow($model,'name'); ?>

    <?php echo $form->textFieldRow($model,'email'); ?>

    <?php echo $form->textFieldRow($model,'subject',array('size'=>60,'maxlength'=>128)); ?>

    <?php echo $form->textAreaRow($model,'body',array('rows'=>6, 'class'=>'span8')); ?>

	<?php if(CCaptcha::checkRequirements()): ?>
		<?php echo $form->captchaRow($model,'verifyCode',array(
            'hint'=>'Please enter the letters as they are shown in the image above.<br/>Letters are not case-sensitive.',
        )); ?>
	<?php endif; ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton',array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Submit',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="https://google-maps-utility-library-v3.googlecode.com/svn/tags/infobox/1.1.11/src/infobox.js"></script>