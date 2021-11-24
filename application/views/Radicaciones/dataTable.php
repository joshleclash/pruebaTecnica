<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Asunto</th>
                <th>Solicitud</th>
                <th>usuario</th>
                <th>editar</th>
            </tr>
        </thead>
        <?php 
            echo "<tbody>";
            foreach($data as $k=>$v):
                echo "<tr>";
                echo "<td>".$v->id."</td>";
                echo "<td>".$v->nombre."</td>";
                echo "<td>".$v->fecha."</td>";
                echo "<td>".$v->asunto."</td>";
                echo "<td>".$v->solicitud."</td>";
                echo "<td>".$v->usuario_id."</td>";
                echo "<td><a  onClick=loadInformacion(".$v->id."); style='color:#007bff; cursor:pointer;' > editar </a></td>";
                echo "</tr>";
            endforeach;
            echo "</tbody>";
        ?>
</table>