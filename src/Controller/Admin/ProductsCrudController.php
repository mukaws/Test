<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Products::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
            TextEditorField::new('subtitle'),
            TextField::new('imageFile')->setFormType(VichImageType::class),
            ImageField::new('image')->setBasePath('/uploads/images')->onlyOnIndex(),
            MoneyField::new('price')->setCurrency('EUR'),
            TextField::new('weight'),
            AssociationField::new('category')
        

        ];
    }
    
}
