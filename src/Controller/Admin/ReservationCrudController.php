<?php

namespace App\Controller\Admin;

use App\Entity\Reservation;



use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;



class ReservationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reservation::class;
    }


    public function configureFields(string $pageName): iterable
    {

        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            Field::new('nb_personnes', label: 'nombre de personnes'),
            Field::new('date'),
            Field::new('reservation_heure'),
            TextField::new('allergie')

        ];
    }

}
