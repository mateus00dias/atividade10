<h1>listar</h1>
<?php 
    $sql = "SELECT * FROM usuarios" ; 
    $res = $conn->query($sql);
    $qtd = res->num_rows;

    if ($qtd > 0){
        print "<table class = 'table table-hover table-striped table-bordered'>"; 
        print "<tr>";
        print "<th>#</th>";
        print "<th>nome</th>";
        print "<th>email</th>";
        print "<th>data_nasc</th>";
        print "<th>ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id.\"class = 'btn btn-success'>Editar</button>
                <button class = 'btn btn-danger'>Excluir</button>
            
            </td>";
            print "</tr>";
        }
        print  "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados !</p>";
    }
?>