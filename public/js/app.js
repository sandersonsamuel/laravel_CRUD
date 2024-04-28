import Toastify from 'toastify-js';
import "toastify-js/src/toastify.css"

const confirmValuesForm = () => {

    const nome = document.getElementById('nome');
    const preco = document.getElementById('preco');
    const descricao = document.getElementById('descricao');
    const quantidade = document.getElementById('quantidade');

    if (nome != null && preco != null && descricao != null && quantidade != null){
        return true;
    }else{
        Toastify({
            text: 'Preencha todos os campos',
            duration: 3000,
            newWindow: true,
            close: true,
            gravity: "bottom",
            position: "right",
            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
            stopOnFocus: true,
            onClick: null,
            onHover: null,
            animate: "scale",
            stopOnHover: true,
            rtl: false,
            pauseOnHover: true,
            draggable: true,
            pauseOnVisibilityChange: true,
            progress: undefined,
            autoClose: false,
            hideAfter: 5000,
            closeOnClick: true,
            closeButton: false,
            newestOnTop: false,
            maxVisible: 999,
            closeOnEscape: true,
            closeButtonAriaLabel: "Close",
        })
    }

}

function confirmDelete (){
    if (confirm('Você tem certeza que deseja excluir?')){
        return true;
    }else{
        return false;
    }
}
