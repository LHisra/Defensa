function errorCont(){
    alert('Ingresaste mal los datos, verifique bien y vuelva a intentarlo');
    location.href="index.php" ;
setTimeout ("errorCont()", 20000);
}





function crear_modal(){

    $("#modalEditar").modal('show');
}