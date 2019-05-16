<?php 
    header ("Content-type: image/png");
    $x=400;
    $y=300;
    $im = ImageCreate ($x, $y)or die ("Erreur lors de la création de l'image");
    $noir =  imagecolorallocate($im,0,0,0);       
    $couleur_fond = ImageColorAllocate ($im, 255, 255, 255);
    imagefill($im,0,0,$couleur_fond );
    //Dessine dans l'image $im une ellipse en partant du point ($x,$y), de largeur $l, de hauteur $h et de couleur $col.(x,y,l,h)
    ImageEllipse($im,$x/2,$y/2,$x/1.5,$x/1.5,$noir);
    //ImagLine Trace dans $im une ligne de couleur $col entre les points ($x1,$y1) et ($x2,$y2)
    //lèvre du bas
    ImageLine ($im, $x/3, $y/1.5+25, $x/1.5, $y/1.5+25, $noir);
    //lèvre du haut
    ImageLine ($im, $x/3, $y/1.5, $x/1.5, $y/1.5, $noir);
    //Nez
     ImageLine ($im, $x/2, $y/2+30, $x/2, $y/2-30, $noir);
     ImageLine ($im, $x/2+30, $y/2, $x/2-30, $y/2, $noir);
    //Oeil droit
    ImageEllipse($im,$x/3,$y/3,69,69,$noir);
    //Oeil Gauche
    ImageEllipse($im,$x/2+67,$y/3,69,69,$noir);
    ImagePng ($im); 
	
?>
