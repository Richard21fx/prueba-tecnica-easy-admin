<?php

namespace App\Controller\Admin;

use App\Entity\ImbdMovies;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;


class ImbdMoviesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ImbdMovies::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('imdb_title_id'),
            TextField::new('Titulo'),
            TextField::new('Titulo_original'),
            IdField::new('año'),
            TextField::new('genero'),
            IdField::new('duracion'),
            TextField::new('pais'),
            TextField::new('idioma'),
            TextField::new('director'),
            TextField::new('guionista'),
            TextField::new('compañia_productora'),
            TextEditorField::new('actores'),
            TextEditorField::new('descripcion'),
            IdField::new('votos_promedio'),
            IdField::new('votos'),
            IdField::new('presupuesto'),
            IdField::new('ingresos_brutos_estados_unidos'),
            IdField::new('ingresos_brutos_mundiales'),
            IdField::new('meta_objetivo'),
            IdField::new('opinion_del_publico'),
            IdField::new('opinion_de_la_critica'),
  
        ];
    }
 
}
