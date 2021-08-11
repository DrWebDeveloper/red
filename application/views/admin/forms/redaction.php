<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel_s">
                    <div class="panel-body">
                        <h4 class="no-margin">
                            Redaction Form </h4>
                        <hr class="hr-panel-heading">
                        <?php
                        // if(isset($_POST)){
                        //     var_dump($_POST);
                        // }
                        ?>
                        <?php
                        echo form_open_multipart(site_url('admin/forms/redaction'));
                        ?>
                        <!-- <form action="<?php echo base_url("/admin/forms/redaction/preds"); ?>" enctype="multipart/form-data" method="POST" accept-charset="utf-8" novalidate="novalidate"> -->
                        <div class="row">
                            <!-- Order Detail -->
                            <div class="col-md-6">
                                <div class="form-group" app-field-wrapper="no_texts">
                                    <label for="no_texts" class="control-label">
                                        <small class="req text-danger">* </small>Number of Texts
                                    </label>
                                    <small class="req text-danger"> Please Separate each option with a Comma (<b>,</b>) </small>
                                    <input type="text" placeholder="Example 1,2,3,4,5,6" id="no_texts" name="no_texts" class="form-control" value="<?php print_r($data[0]->no_texts); ?>">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" app-field-wrapper="no_words">
                                    <label for="no_words" class="control-label">
                                        <small class="req text-danger">* </small>Words Per Text
                                    </label>
                                    <small class="req text-danger"> Please Separate each option with a Comma (<b>,</b>) </small>
                                    <input type="text" placeholder="Example 1,2,3,4,5,6" id="no_words" name="no_words" class="form-control" value="<?php print_r($data[0]->no_words); ?>">

                                </div>
                            </div>

                            <!-- Package Descriptions -->
                            <div class="col-md-4 border-right">
                                <div class="form-group" app-field-wrapper="basic_desc">
                                    <label for="basic_desc" class="control-label">
                                        <small class="req text-danger">* </small>Basic Description
                                    </label>
                                    <input type="text" placeholder="We Offer Basic Services in this package" id="basic_desc" name="basic_desc" class="form-control" value="<?php print_r($data[0]->basic_desc); ?>">
                                </div>
                            </div>
                            <div class="col-md-4 border-right">
                                <div class="form-group" app-field-wrapper="standard_desc">
                                    <label for="standard_desc" class="control-label">
                                        <small class="req text-danger">* </small>Standard Description
                                    </label>
                                    <input type="text" placeholder="We Offer Standard Services in this package" id="standard_desc" name="standard_desc" class="form-control" value="<?php print_r($data[0]->standard_desc); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" app-field-wrapper="professional_desc">
                                    <label for="professional_desc" class="control-label">
                                        <small class="req text-danger">* </small>Professional Description
                                    </label>
                                    <input type="text" placeholder="We Offer Professional Services in this package" id="professional_desc" name="professional_desc" class="form-control" value="<?php print_r($data[0]->professional_desc); ?>">
                                </div>
                            </div>

                            <!-- Package Prices -->
                            <div class="col-md-4 border-right">
                                <div class="form-group" app-field-wrapper="basic_price">
                                    <label for="basic_price" class="control-label">
                                        <small class="req text-danger">* </small>Basic Price
                                    </label>
                                    <input type="number" placeholder="(€)" id="basic_price" name="basic_price" class="form-control" value="<?php print_r($data[0]->basic_price); ?>">
                                </div>
                            </div>
                            <div class="col-md-4 border-right">
                                <div class="form-group" app-field-wrapper="standard_price">
                                    <label for="standard_price" class="control-label">
                                        <small class="req text-danger">* </small>Standard Price
                                    </label>
                                    <input type="number" placeholder="(€)" id="standard_price" name="standard_price" class="form-control" value="<?php print_r($data[0]->standard_price); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" app-field-wrapper="professional_price">
                                    <label for="professional_price" class="control-label">
                                        <small class="req text-danger">* </small>Professional Price
                                    </label>
                                    <input type="number" placeholder="(€)" id="professional_price" name="professional_price" class="form-control" value="<?php print_r($data[0]->professional_price); ?>">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">

                            <div class="col-md-3 col-xs-6 border-right">
                                <h4 class="bold no-mtop">Box 1</h4>
                                <p style="color:#989898" class="font-medium no-mbot">
                                </p>
                                <!-- <p class="font-medium-xs no-mbot text-muted">
                                        Tâches qui me sont assignées: 0 </p> -->
                                <div class="form-group" app-field-wrapper="box1_title">
                                    <label for="box1_title" class="control-label">
                                        <small class="req text-danger">* </small>Title
                                    </label>
                                    <input type="text" placeholder="Example; HTML Formatting" id="box1_title" name="box1_title" class="form-control" value="<?php print_r($data[0]->box1_title); ?>">
                                    <label for="product_name" class="control-label">
                                        <small class="req text-danger">* </small>Detail
                                    </label>
                                    <input type="textarea" placeholder="Box 1 Description" id="box1_desc" name="box1_desc" class="form-control" value="<?php print_r($data[0]->box1_desc); ?>">
                                    <label for="box1_price" class="control-label">
                                        <small class="req text-danger">* </small>Price
                                    </label>
                                    <input type="number" placeholder="(€)" id="box1_price" name="box1_price" class="form-control" value="<?php print_r($data[0]->box1_price); ?>">
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6 border-right">
                                <h4 class="bold no-mtop">Box 2</h4>
                                <p style="color:#03A9F4" class="font-medium no-mbot">
                                </p>
                                <!-- <p class="font-medium-xs no-mbot text-muted">
                                        Tâches qui me sont assignées: 0 </p> -->
                                <div class="form-group" app-field-wrapper="box2_title">
                                    <label for="box2_title" class="control-label">
                                        <small class="req text-danger">* </small>Title
                                    </label>
                                    <input type="text" placeholder="Example; SEO Optimization" id="box2_title" name="box2_title" class="form-control" value="<?php print_r($data[0]->box2_title); ?>">
                                    <label for="product_name" class="control-label">
                                        <small class="req text-danger">* </small>Detail
                                    </label>
                                    <input type="textarea" placeholder="Box 2 Description" id="box2_desc" name="box2_desc" class="form-control" value="<?php print_r($data[0]->box2_desc); ?>">
                                    <label for="box2_price" class="control-label">
                                        <small class="req text-danger">* </small>Price
                                    </label>
                                    <input type="number" placeholder="(€)" id="box2_price" name="box2_price" class="form-control" value="<?php print_r($data[0]->box2_price); ?>">
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6 border-right">
                                <h4 class="bold no-mtop">Box 3</h4>
                                <p style="color:#2d2d2d" class="font-medium no-mbot">
                                </p>
                                <!-- <p class="font-medium-xs no-mbot text-muted">
                                        Tâches qui me sont assignées: 0 </p> -->
                                <div class="form-group" app-field-wrapper="box3_title">
                                    <label for="box3_title" class="control-label">
                                        <small class="req text-danger">* </small>Title
                                    </label>
                                    <input type="text" placeholder="Example; Confidential Order" id="box3_title" name="box3_title" class="form-control" value="<?php print_r($data[0]->box3_title); ?>">
                                    <label for="product_name" class="control-label">
                                        <small class="req text-danger">* </small>Detail
                                    </label>
                                    <input type="textarea" placeholder="Box 3 Description" id="box3_desc" name="box3_desc" class="form-control" value="<?php print_r($data[0]->box3_desc); ?>">
                                    <label for="box3_price" class="control-label">
                                        <small class="req text-danger">* </small>Price
                                    </label>
                                    <input type="number" placeholder="(€)" id="box3_price" name="box3_price" class="form-control" value="<?php print_r($data[0]->box3_price); ?>">
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <h4 class="bold no-mtop">Box 4</h4>
                                <p style="color:#adca65" class="font-medium no-mbot">
                                </p>
                                <!-- <p class="font-medium-xs no-mbot text-muted">
                                        Tâches qui me sont assignées: 0 </p> -->
                                <div class="form-group" app-field-wrapper="box4_title">
                                    <label for="box4_title" class="control-label">
                                        <small class="req text-danger">* </small>Title
                                    </label>
                                    <input type="text" placeholder="Example; Research and Documentation" id="box4_title" name="box4_title" class="form-control" value="<?php print_r($data[0]->box4_title); ?>">
                                    <label for="product_name" class="control-label">
                                        <small class="req text-danger">* </small>Detail
                                    </label>
                                    <input type="textarea" placeholder="Box 4 Description" id="box4_desc" name="box4_desc" class="form-control" value="<?php print_r($data[0]->box4_desc); ?>">
                                    <label for="box4_price" class="control-label">
                                        <small class="req text-danger">* </small>Price
                                    </label>
                                    <input type="number" placeholder="(€)" id="box4_price" name="box4_price" class="form-control" value="<?php print_r($data[0]->box4_price); ?>">
                                </div>
                            </div>

                        </div>

                        <!-- 
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group" app-field-wrapper="rate"><label for="rate" class="control-label"> <small class="req text-danger">* </small>Basic</label><input type="number" id="rate" name="rate" class="form-control" min="0.00" value="<?php # print_r($data[0]->); 
                                                                                                                                                                                                                                                                            ?>"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Tax</label>
                                        <div class="dropdown bootstrap-select show-tick display-block tax bs3" style="width: 100%;"><select class="selectpicker display-block tax" data-width="100%" name="taxes[]" multiple="" data-none-selected-text="Aucune taxe" tabindex="-98">
                                                <option value="TVA|17.00" data-taxrate="17.00" data-taxname="TVA|17.00" data-subtext="TVA|17.00">17.00%</option>
                                            </select><button type="button" class="btn dropdown-toggle btn-default bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Aucune taxe">
                                                <div class="filter-option">
                                                    <div class="filter-option-inner">
                                                        <div class="filter-option-inner-inner">Aucune taxe</div>
                                                    </div>
                                                </div><span class="bs-caret"><span class="caret"></span></span>
                                            </button>
                                            <div class="dropdown-menu open">
                                                <div class="inner open" role="listbox" id="bs-select-2" tabindex="-1" aria-multiselectable="true">
                                                    <ul class="dropdown-menu inner " role="presentation"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group" app-field-wrapper="quantity_number"><label for="quantity_number" class="control-label"> <small class="req text-danger">* </small>Quantité</label><input type="number" id="quantity_number" name="quantity_number" class="form-control" value="<?php # print_r($data[0]->); 
                                                                                                                                                                                                                                                                                                                ?>"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="is_digital">Aucune quantité ne s'applique - Produit numérique</label>
                                        <div class="checkbox checkbox-danger">
                                            <input type="checkbox" name="is_digital" id="is_digital" value="<?php # print_r($data[0]->); 
                                                                                                            ?>">
                                            <label></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="recurring" class="control-label">
                                                Facture récurrente ? </label>
                                            <div class="dropdown bootstrap-select bs3" style="width: 100%;"><select class="selectpicker" data-width="100%" name="recurring" data-none-selected-text="Aucune sélection" tabindex="-98">
                                                    <option value="0">Non</option>
                                                    <option value="1">Tous les 1 mois</option>
                                                    <option value="2">Tous les 2 mois</option>
                                                    <option value="3">Tous les 3 mois</option>
                                                    <option value="4">Tous les 4 mois</option>
                                                    <option value="5">Tous les 5 mois</option>
                                                    <option value="6">Tous les 6 mois</option>
                                                    <option value="7">Tous les 7 mois</option>
                                                    <option value="8">Tous les 8 mois</option>
                                                    <option value="9">Tous les 9 mois</option>
                                                    <option value="10">Tous les 10 mois</option>
                                                    <option value="11">Tous les 11 mois</option>
                                                    <option value="12">Tous les 12 mois</option>
                                                    <option value="custom">Personnalisé</option>
                                                </select><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" title="Non">
                                                    <div class="filter-option">
                                                        <div class="filter-option-inner">
                                                            <div class="filter-option-inner-inner">Non</div>
                                                        </div>
                                                    </div><span class="bs-caret"><span class="caret"></span></span>
                                                </button>
                                                <div class="dropdown-menu open">
                                                    <div class="inner open" role="listbox" id="bs-select-3" tabindex="-1">
                                                        <ul class="dropdown-menu inner " role="presentation"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recurring_custom hide">
                                        <div class="col-md-2">
                                            <div class="form-group" app-field-wrapper="repeat_every_custom"><label for="repeat_every_custom" class="control-label">Number</label><input type="number" id="repeat_every_custom" name="repeat_every_custom" class="form-control" min="1" value="1"></div>
                                        </div>
                                        <div class="col-md-5">
                                            <label>Select</label>
                                            <div class="dropdown bootstrap-select bs3" style="width: 100%;"><select name="repeat_type_custom" id="repeat_type_custom" class="selectpicker" data-width="100%" data-none-selected-text="Aucune sélection" tabindex="-98">
                                                    <option value="day">Jour(s)</option>
                                                    <option value="week">Semaine(s)</option>
                                                    <option value="month">Mois</option>
                                                    <option value="year">Année(s)</option>
                                                </select><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="combobox" aria-owns="bs-select-4" aria-haspopup="listbox" aria-expanded="false" data-id="repeat_type_custom" title="Jour(s)">
                                                    <div class="filter-option">
                                                        <div class="filter-option-inner">
                                                            <div class="filter-option-inner-inner">Jour(s)</div>
                                                        </div>
                                                    </div><span class="bs-caret"><span class="caret"></span></span>
                                                </button>
                                                <div class="dropdown-menu open">
                                                    <div class="inner open" role="listbox" id="bs-select-4" tabindex="-1">
                                                        <ul class="dropdown-menu inner " role="presentation"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cycles_wrapper" class=" hide">
                                        <div class="col-md-12">
                                            <div class="form-group recurring-cycles">
                                                <label for="cycles">Total de cycles </label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control" disabled="" name="cycles" id="cycles" value="0">
                                                    <div class="input-group-addon">
                                                        <div class="checkbox">
                                                            <input type="checkbox" checked="" id="unlimited_cycles">
                                                            <label for="unlimited_cycles">Infini</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="attachment">
                                            <div class="form-group">
                                                <label for="attachment" class="control-label"><small class="req text-danger">* </small>Image du produit</label>
                                                <input type="file" extension="png,jpg,jpeg,gif" filesize="2147483648" class="form-control" name="product" id="product" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        <button type="submit" name="save" class="btn btn-info pull-right">Enregistrer</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <hr class="hr-panel-heading">


            </div>
        </div>
    </div>
</div>
</div>
<?php init_tail(); ?>
<script>
    $(document).ready(function() {
        $("#no_texts , #no_words").keypress(function(event) {
            if (event.key == ",") {
                return true;
            } else if (event.key == 0) {
                return true;
            } else if (event.key == 1) {
                return true;
            } else if (event.key == 2) {
                return true;
            } else if (event.key == 3) {
                return true;
            } else if (event.key == 4) {
                return true;
            } else if (event.key == 5) {
                return true;
            } else if (event.key == 6) {
                return true;
            } else if (event.key == 7) {
                return true;
            } else if (event.key == 8) {
                return true;
            } else if (event.key == 9) {
                return true;
            } else {
                event.preventDefault();
                alert("Only Numbers and , Allowed!");
                return false;
            }
        });



        // alert("Welcome");
    });
    $(function() {
        initDataTable('.table-custom-fields', window.location.href);
    });
</script>
</body>

</html>