<!-- <link rel="stylesheet" href="/dist-assets/css/style.css"> -->
<?php
    // $var = $_GET["var"];
    // echo $var;
     
?>
<style>
    .active {
        background-color: #00D355;
    }
</style>

<div class="card" style="border: 2px solid #ffffff; background-color: #228C4F; max-width: 1500px;">
    <div class="card-body">
        <input type="number" value="2" id="pergunta_<?php echo $ind; ?>_input" hidden>
        <h2 value="2" class="card-text" style="color: #ffffff" id="pergunta_2">O que indica o sinal?</h2>
    </div>
</div>
<div class="row mt-3"></div>
<div class="row">
    <div id="btn" class="col-sm-12 col-md-4">
        <div class="container h-100 card mb-12" style="border: 1px solid #ffffff">
            <div class="row align-items-center h-100" style="border-radius:0px; background-color: #228C4F;">
                <div class="col-6 mx-auto">
                <?php //print_r($ind.'_opb');  ?>
                    <div class=" h-100 border-primary justify-content-center">
                        <div>
                            <img id="img_<?php echo $ind; ?>"  src="./dist-assets/images/10t.svg" class="card-img cap" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="card mb-12" style="max-width: 1200px;">
                                                <div class="row no-gutters">
                                                  <div class="col-md-5">
                                                    <img src="./dist-assets/images/stop.svg" class="card-img cap" alt="">
                                                   
                                                  </div>
                                                  <div class="col-md-8">
                                                    <div class="card-body">
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                            </div> -->
    </div>

    <div class="col-sm-12 col-md-8">
        <div class="card mb-8 bigOption" style="max-width: 1100px; ">
            <div class="row no-gutters" id="div">
                <div class="opcao_alinea col-md-2 text-center col-md-2 text-center ">
                    <!-- <img src="./dist-assets/images/stop.svg" class="card-img" alt=""> -->
                    <input value="1" type="radio" name="<?php echo $ind; ?>_opa" id="<?php echo $ind; ?>_opa">
                    <label for="<?php echo $ind; ?>_opa" id="div_i" class="opcao card h-100 border-primary justify-content-center radioNotSelected">
                        <div class="col-6 mx-auto">
                            <div class=" h-100 border-primary justify-content-center alternativa" style="color: white; font-weight: bold;">
                                A
                            </div>
                        </div>
                    </label>
                </div>
                <div class="col-md-8 op">
                    <input value="1" type="radio" name="<?php echo $ind; ?>_opa" id="<?php echo $ind; ?>_opa">
                    <label for="<?php echo $ind; ?>_opa" id='opcao_<?php echo $ind; ?>_A' class="card-body option">
                        Sinal de transito que indica uma rotunda a direita
                    </label>
                </div>
            </div>
        </div>
        <div class="row mt-3"></div>
        <div class="card mb-8 bigOption" style="max-width: 1100px; ">
            <div class="row no-gutters" id="div">
                <div class="opcao_alinea col-md-2 text-center col-md-2 text-center">
                    <!-- <img src="./dist-assets/images/stop.svg" class="card-img" alt=""> -->
                    <input value="2" type="radio" name="<?php echo $ind; ?>_opa" id="<?php echo $ind; ?>_opb">
                    <label for="<?php echo $ind; ?>_opb" id="div_i" class="opcao card h-100 border-primary justify-content-center radioNotSelected">
                        <div class="col-6 mx-auto">
                            <div class=" h-100 border-primary justify-content-center alternativa" style="color: white; font-weight: bold;">
                                B
                            </div>
                        </div>
                    </label>

                </div>
                <div class="col-md-8 op">
                    <input value="2" type="radio" name="<?php echo $ind; ?>_opa" id="<?php echo $ind; ?>_opb">
                    <label for="<?php echo $ind; ?>_opb" id='opcao_<?php echo $ind; ?>_B' class="card-body option">
                        Sinal de transito que indica uma rotunda a direita
                    </label>
                </div>
            </div>
        </div>
        <div class="row mt-3"></div>
        <div class="card mb-8 bigOption" style="max-width: 1100px; ">
            <div class="row no-gutters" id="div">
                <div class="opcao_alinea col-md-2 text-center col-md-2 text-center">
                    <!-- <img src="./dist-assets/images/stop.svg" class="card-img" alt=""> -->
                    <input value="3" type="radio" name="<?php echo $ind; ?>_opa" id="<?php echo $ind; ?>_opc">
                    <label for="<?php echo $ind; ?>_opc" id="div_i" class="opcao card h-100 border-primary justify-content-center radioNotSelected">
                        <div class="col-6 mx-auto">
                            <div class=" h-100 border-primary justify-content-center alternativa" style="color: white; font-weight: bold;">
                                C
                            </div>
                        </div>
                    </label>

                </div>
                <div class="col-md-8 op">
                    <input value="3" type="radio" name="<?php echo $ind; ?>_opa" id="<?php echo $ind; ?>_opc">
                    <label for="<?php echo $ind; ?>_opc" id='opcao_<?php echo $ind; ?>_C' class="card-body option">
                        Sinal de transito que indica uma rotunda a direita
                    </label>
                </div>
            </div>
        </div>
        <div class="row mt-3"></div>
        <div class="card mb-8 bigOption " style="max-width: 1100px;">
            <div class="row no-gutters" id="div">
                <div class="opcao_alinea col-md-2 text-center col-md-2 text-center">
                    <!-- <img src="./dist-assets/images/stop.svg" class="card-img" alt=""> -->
                    <input value="4" type="radio" name="<?php echo $ind; ?>_opa" id="<?php echo $ind; ?>_opd">
                    <label for="<?php echo $ind; ?>_opd" id="div_i" class="opcao card h-100 border-primary justify-content-center radioNotSelected">
                        <div class="col-6 mx-auto">
                            <div class=" h-100 border-primary justify-content-center alternativa" style="color: white; font-weight: bold;">
                                D
                            </div>
                        </div>
                    </label>

                </div>
                <div class="col-md-8 op">
                    <input value="4" type="radio" name="<?php echo $ind; ?>_opa" id="<?php echo $ind; ?>_opd">
                    <label for="<?php echo $ind; ?>_opd" id='opcao_<?php echo $ind; ?>_D' class="card-body option">
                        Sinal de transito que indica uma rotunda a direita
                    </label>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- <script>
    $(function() {
        var $divs = $('div.bigOption');

        $('input[type="radio"][name="<?php echo $ind; ?>_opa"]').change(function() {
            alert('ol');
            $divs.removeClass('active');
            $(this).closest('div.bigOption').addClass('active');
        })
    });
</script> -->