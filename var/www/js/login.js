if(accesoDenegado){
    error();
}
function error(){
    Swal.fire({
        title: "No puedes acceder",
        text: `Ususario y/o contraseña incorrectos`,
        icon: 'error',
        width: '400px',
        confirmButtonColor: '#FF4558'
    });
}
