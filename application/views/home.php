
<?php $this->load->view("header");?>
<div class="home">
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Welcome <?php echo $this->session->userdata("userActive")->nombre;?></h1>
        <form class="needs-validation" novalidate id="radicaciones_form" action="<?php echo site_url("Radicaciones/modifi");?>">
                            <div class="form-row">
                                <div class="col-md-1 mb-3">
                                <label for="validationCustom01">ID</label>
                                <input type="text" class="form-control" id="id" placeholder="ID" value="" required name="radicaciones_id" readonly="readonly">
                              </div>
                              <div class="col-md-3 mb-3">
                                <label for="validationCustom01">Nombre</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" value="" required name="radicaciones_nombre">
                                
                              </div>
                              <div class="col-md-3 mb-3">
                                <label for="validationCustom02">Asunto</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Radicaciones" value="" required name="radicaciones_asunto">
                                
                              </div>
                                <div class="col-md-3 mb-3">
                                <label for="validationCustom02">Solicitud</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Solicitud" value="" required name="radicaciones_solicitud">
                                
                              </div>

                            </div>
                            <button class="btn btn-primary btn-lg" type="button" onClick="saveForm();">Almacenar</button>
        </form>
        
      </div>
    </div>
    <div id="dataTableContainer">
            <?php $this->load->view("Radicaciones/dataTable",array("data"=>$data));?>
    </div>
</div>
<script>
    $(document).ready(function() 
    {
        $('#example').DataTable
        ({
            "order": [[ 0, "desc" ]],
             "pageLength": 25
        });
    });
    function loadInformacion(id)
    {
        var obj = findAjax('<?php echo site_url("Radicaciones/load");?>',{'id':id});
        $('#id').val(obj.responseJSON.id);
        $('#validationCustom01').val(obj.responseJSON.nombre);
        $('#validationCustom02').val(obj.responseJSON.asunto);
        $('#validationCustom03').val(obj.responseJSON.solicitud);
    }
    function saveForm()
    {
        var obj = sendAjax('radicaciones_form','');
        if(obj.responseJSON.success)
        {
          alert(obj.responseJSON.msg); 
          location.reload();
          
        }else{
          alert(obj.responseJSON.msg);  
        }
    }
</script>    





