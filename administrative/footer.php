        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App core js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <script src="assets/plugins/autoNumeric/autoNumeric.js" type="text/javascript"></script>
		<script src="assets/js/autosuggest.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script src="assets/js/jquery-tags-input/jquery.tagsinput.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
	    <script type="text/javascript" src="assets/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
		<script src="assets/plugins/fileinput/js/fileinput.min.js" type="text/javascript"></script>
		<!--Summernote js-->
		<script src="assets/plugins/summernote/summernote.min.js"></script>
		<!-- Modal-Effect -->
		<script src="assets/plugins/custombox/js/custombox.min.js"></script>
		<script src="assets/plugins/custombox/js/legacy.min.js"></script>
	    
        <!--Form Wizard-->
        <script src="assets/plugins/jquery.steps/js/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
		
		<script type="text/javascript" src="assets/js/superfish/hoverIntent.js"></script>
		<script type="text/javascript" src="assets/js/superfish/superfish.js"></script>
		<script src="assets/js/jquery.maskMoney.js"></script>
		
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
		<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
		<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
		<script src="assets/js/custom.js"></script>
        <script type="text/javascript" language="javascript" >
		$(document).ready(function() {
			$('.inline-date').datepicker({
				format: "yyyy-mm-dd",
				autoclose: true,
				todayHighlight: true,
			});
			$(".mfileinput").fileinput({
				showCaption: false,
				uploadAsync: false,
				overwriteInitial: true,
				browseLabel: "Browse Photos",
				browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
				showUpload: true,
				initialPreviewShowDelete: true,
				showUploadedThumbs: true,
				removeIcon: '<i class="fa fa-trash-o"></i> ',
				uploadUrl: "#",
				allowedFileExtensions: ["jpg","png","pdf"],
			});
			$(".fileinput").fileinput({
				showCaption: false,
				uploadAsync: false,
				overwriteInitial: true,
				browseLabel: "Browse Photos",
				browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
				showUpload: true,
				initialPreviewShowDelete: true,
				showUploadedThumbs: true,
				removeIcon: '<i class="fa fa-trash-o"></i> ',
				uploadUrl: "#",
				allowedFileExtensions: ["jpg","png","pdf"],
			});
			$('.wysihtml5').wysihtml5({
			toolbar: {
						insertAnything:  function(locale, options) {
							
						}
					},
					html: true,
					color: true
			});

		});
		$('.summernote').summernote({
			height: 250,                 // set editor height
			minHeight: null,             // set minimum height of editor
			maxHeight: null,             // set maximum height of editor
			focus: false                 // set focus to editable area after initializing summernote
		});
        </script>
    </body>
</html>