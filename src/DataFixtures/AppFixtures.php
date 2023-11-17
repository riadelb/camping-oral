<?php

namespace App\DataFixtures;

use App\Entity\Bien;
use App\Entity\Facture;
use App\Entity\Reservation;
use App\Entity\Taxes;
use App\Entity\Type;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $encoder;
    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $this->loadUser($manager);
        $this->loadFacture($manager);
        $this->loadType($manager);
        $this->loadTaxes($manager);
        $this->loadBien($manager);
        $this->loadReservation($manager);

        $manager->flush();
    }

    //inserer un user
    public function loadUser(ObjectManager $manager): void
    {
        $user = new User();
        $user->setNom('admin')
            ->setEmail('admin@admin.com')
            ->setPassword($this->encoder->hashPassword($user, 'admin'))
            ->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);
        $this->addReference('user_1', $user );
    }

    //inserer une facture
    public function loadFacture(ObjectManager $manager): void
    {
        $facture = new Facture();
        $facture->setNom('toto')
            ->setTotal(378)
            ->setDateDebut(new \DateTime('2023-06-06'))
            ->setDateFin(new \DateTime('2023-06-12'));
        $manager->persist($facture);
    }

    //inserer un type
    public function loadType(ObjectManager $manager): void
    {
        $typesLabel = ['Mobil-Home',
                        'Caravane',
                        'Emplacement'];

        foreach ($typesLabel as $key=>$typeData) {
            $type = new Type();
            $type->setLabel($typeData);
            $manager->persist($type);
            $this->addReference('type_' . $key +1, $type);
        }
    }

    //inserer une Taxes
    public function loadTaxes(ObjectManager $manager): void
    {
        $taxes = [
            [
                'label' => 'Séjour (enfant)',
                'prix' => 35
            ],
            [
                'label' => 'Séjour (adulte)',
                'prix' => 60
            ],
            [
                'label' => 'Piscine (enfant)',
                'prix' => 100
            ],
            [
                'label' => 'Piscine (adulte)',
                'prix' => 150
            ],
            [
                'label' => 'Haute saison',
                'prix' => 15
            ],
            [
                'label' => 'Remise 5% / 7J',
                'prix' => 5
            ]
        ];
        foreach ($taxes as $data) {
            $taxe = new Taxes();
            $taxe->setLabel($data['label'])
                ->setPrix($data['prix']);
            $manager->persist($taxe);
            }

    }

    // ...
//inserer un bien
    public function loadBien(ObjectManager $manager): void
    {
        $user = $this->getReference('user_1'); // Récupérez l'utilisateur existant

        // Mobilhomes
        for ($i = 1; $i <= 50; $i++) {
            $bien = new Bien();
            $bien->setNom('Bien mobil-home' . $i)
                ->setPrix(5400)
                ->setCapacite(rand(2, 8))
                ->setType($this->getReference('type_1'))
                ->setImagePath('mobil-home.jpg')
                ->setDescription('Super mobilhome ' . $bien->getCapacite() . ' places')
                ->setUser($user);
            $manager->persist($bien);
            $this->addReference('bien_' . $i, $bien);
        }

        // Caravanes
        for ($i = 1; $i <= 10; $i++) {
            $bienCaravane = new Bien();
            $bienCaravane->setNom('Bien caravane' . $i)
                ->setPrix(4800)
                ->setCapacite(rand(2, 6))
                ->setType($this->getReference('type_2'))
                ->setImagePath('caravane.jpeg')
                ->setDescription('Super caravane ' . $bienCaravane->getCapacite() . ' places')
                ->setUser($user);
            $manager->persist($bienCaravane);
        }

        // Emplacements
        for ($i = 1; $i <= 30; $i++) {
            $bienEmplacement = new Bien();
            $bienEmplacement->setNom('Emplacement' . $i)
                ->setPrix(1400)
                ->setCapacite(rand(2, 6))
                ->setType($this->getReference('type_3'))
                ->setImagePath('emplacement.jpg')
                ->setDescription('Super emplacement ' . $bienEmplacement->getCapacite() . ' places')
                ->setUser($user);
            $manager->persist($bienEmplacement);
        }
    }

    //inserer une reservation
    public function loadReservation(ObjectManager $manager): void
    {
        $reservation = new Reservation();
        $reservation->setUser($this->getReference('user_1'))
            ->setBien($this->getReference('bien_1'))
            ->setAdultes(2)
            ->setEnfants(2)
            ->setTotal(54000)
            ->setDateDebut(new \DateTime('2023-06-06'))
            ->setDateFin(new \DateTime('2023-06-12'));
        $manager->persist($reservation);
    }
}

