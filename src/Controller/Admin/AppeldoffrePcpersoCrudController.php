<?php

namespace App\Controller\Admin;

use App\Entity\AppeldoffrePcperso;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AppeldoffrePcpersoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AppeldoffrePcperso::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
