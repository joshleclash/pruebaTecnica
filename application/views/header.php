<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style type="text/css">
	#body {
		margin: 0 15px 0 15px;
	}
        #container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
        <script>
            function sendAjax(idForm,idResponse)
            {
                
                return  $.ajax
                    ({
                        url:$('#'+idForm).attr("action"),
                        method:"POST",
                        data:$('#'+idForm).serializeArray(),
                        async: false,
                        dataType: "json",
                        success:function(success)
                        {
                          return success;
                        },error:function(err)
                        {
                            return err;
                        }
                    });
            }
            function findAjax(url,obj)
            {
                
                return  $.ajax
                    ({
                        url:url,
                        method:"POST",
                        data:obj,
                        async: false,
                        dataType: "json",
                        success:function(success)
                        {
                          return success;
                        },error:function(err)
                        {
                            return err;
                        }
                    });
            }
         </script>    
</head>
<body>
