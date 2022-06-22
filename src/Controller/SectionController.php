<?php
/* A modifier avec access control */
namespace App\Controller;

use App\Entity\Catevenement;
use App\Routing\Attribute\Route;
use App\Entity\Evenement;
use App\Entity\Section;
use App\Repository\CategorieRepository;
use App\Repository\EvenementRepository;
use App\Repository\SectionRepository;

class SectionController extends AbstractController
{

    #[Route(path: '/section/create', httpMethod: ['POST'] , name: 'create_section' )]
    public function create()
    {
        $data["filliaire"] = $_POST['filliaire'];
        $data["annee"] = $_POST['annee'];


        if(!empty($data["filliaire"]) && !empty($data["annee"])){
            $section = new Section();

            $section->initialiser($data);
            $section->enregistrer();
        }else{
            echo "<script>alert('il manque des infos!')</script>";
        }
    }


    #[Route(path:'/section/update/{id}', httpMethod: ['POST'] , name: 'update_section')]
    public function update(SectionRepository $repoSection, int $id)
    {
        $data["filliaire"] = $_POST['filliaire'];
        $data["annee"] = $_POST['annee'];
        if($repoSection->sectionExist($id))
        {
            $section = new Section($id);
            $section->initialiser($data);
            $section->enregistrer();
        }else{
            echo "<script>alert('Cette Section n'existe pas')</script>";
        }
        
    }

    #[Route(path:'/section/delete/{id}', httpMethod: ['POST'] , name: 'delete_section')]
    public function delete(SectionRepository $repoSection,int $id)
    {
        $section = new Section($id);
        if($repoSection->sectionExist($id)){
            $repoSection->deleteById($id);
        }
    }

}
?>