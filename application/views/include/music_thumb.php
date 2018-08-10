<section id="section-music">
    <h5 class="text-center text-white default-font"> Músicas </h5>
		<div class="container text-center my-3 light-background p-3">	        
        <ul>
            <?php 
                if(!empty($music)){                    
            ?>
                <?php foreach($music as $key): ?>            
                    <li class="text-left listen-sound" data-id="<?=$key->ID?>" data-src="<?=base_url($key->CAMINHO)?>"> <?=$key->ARTISTA?> - <?=$key->NOME?> <span class="oi oi-play-circle float-right"></span></li>
                <?php endforeach; ?>                        
                <a href="<?=base_url("index.php/todas_musicas")?>">
                    <?php if(!$is_list_music){ ?>
                        <button type="button" class="btn btn-info mt-4 ml-0 w-20">VER MAIS +</button>
                    <?php } ?>
                </a>
            <?php                 
                }else{
            ?>
                <span>Não há músicas</span>
                <?php } ?>
        </ul>
        </div>
</section>