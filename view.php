<?php

$db_name='php_practice';
$host='localhost';
$user="root";
$password="";
$con=mysqli_connect($host,$user,$password,$db_name);

$query="SELECT * FROM `regi_form`";
$run=mysqli_query($con,$query);
?>
<h2>Registred Details</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last name</th>
            <th>Company</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Technologies</th>
            <th>Developers</th>
            <th>Edit/Delete</th>
        </tr>
        </thead>
        <tbody>
            <?php
        while($res=mysqli_fetch_array($run))
            {
            ?>
        <tr>
            <td><?php echo $res['ID']; ?></td>
            <td><?php echo $res['First Name']; ?></td>
            <td><?php echo $res['Last Name']; ?></td>
            <td><?php echo $res['Company']; ?></td>
            <td class="emailTable"><?php echo $res['Email']; ?></td>
            <td><?php echo $res['Phone']; ?></td>
            <td><?php echo $res['Subject']; ?></td>
            <td><?php echo $res['Technologies']; ?></td>
            <td><?php echo $res['Developer']; ?></td>
            <td><a href="edit.php?id=<?php echo $res['ID']; ?>">EDIT</a> / <a href="delete.php">DELETE</a></td>
        </tr>
            <?php }
            ?>
        <tbody>
    </table>
</div>
<?php
?>
<style>
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: rgba( 71, 147, 227, 1);
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.fl-table td a {
    text-decoration: none;
    font-weight: bold;
    color: #4FC3A1;
}
.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
</style>