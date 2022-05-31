<?php

class AdminManager extends Manager {
    public function ajout_plat($nom_plat,$image,$prix){
        $req="INSERT INTO plats(nom_plat,image,prix) VALUES(?,?,?)";
            $param=[
                $nom_plat,
                $image,
                $prix
            ];
            $res=$this->getBase()->prepare($req);
            $res->execute($param);
    }

    public function supprime_plat($id){
        $sql = "DELETE FROM plats WHERE id = ?";
        $params[] = $id;
        $res = $this->getBase()->prepare($sql);
        $res->execute($params);

        header('Location: '.URL.'plats');
    }

    public function modifie_plat($choix,$id){
        $resultat=$this->base->prepare('UPDATE plats SET
        nom_plat=?,
        image=?,
        prix=?,
        WHERE id=?');
    $param=[$choix->getNomPlat(),$choix->getImage(),$choix->getPrix(),$id];
    $resultat->execute($param);
    $resultat->closeCursor();
    }
}