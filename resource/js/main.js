const Eliminar = (id)=>{
   const confirmarcion = confirm("Seguro que desea eliminar esta nota?")
    if(confirmarcion){
    window.location.href = '../Bean/Delete.notes.php?id='+id;
    }
}