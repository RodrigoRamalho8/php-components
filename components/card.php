<?php

    function criarCard(string $titulo, string $descricao, ?string $img) {
        // var_dump($titulo);
        // var_dump($descricao);
        // var_dump($img);

        if(is_null($img)){
        return "
                <div class='card'> 
                    <img class='card-img' alt='placeholder.png'>
                    <div class='card-container'>
                        <h4 class='card-container-titulo'>$titulo</h4>
                        <p class='card-container-descricao'>$descricao</p>
                    </div>
                </div>";
         }else{ 
            return "
            <div class='card'> 
                <img class='card-img' src='$img' alt=''>
                <div class='card-container'>
                    <h4 class='card-container-titulo'>$titulo</h4>
                    <p class='card-container-descricao'>$descricao</p>
                </div>
            </div>";
        }
    }


?>