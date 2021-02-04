<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\TypeUser;

class UserFixtures extends Fixture
{
    const USERS = [[
            'name' => 'contributorName',
            'lastname' => 'contributorLastName',
            'image' => '',
            'email' => 'contributor@monsite.com',
            'roles' => ['ROLE_CONTRIBUTOR'],
            'password' => 'contributorpassword',
            'type_user' => 'contributeur',
        ],
        [
            'name' => 'adminName',
            'lastname' => 'adminLastName',
            'image' => '',
            'email' => 'admin@monsite.com',
            'roles' => ['ROLE_ADMIN'],
            'password' => 'adminpassword',
            'type_user' => 'admin',
        ],
        [
            'name' => 'lara',
            'lastname' => 'nile',
            'image' => 'https://cdn.shopify.com/s/files/1/1078/7234/products/tights-z1-professional-rehearsal-ballet-tights-13650239553610_1600x.jpg?v=1584392710',
            'email' => 'lara@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'larapassword',
            'type_user' => 'ballet teacher',
        ],
        [
            'name' => 'sarah',
            'lastname' => 'vega',
            'image' => 'https://i2.wp.com/ksd-online.co.uk/wp-content/uploads/2020/05/IMG_0476.jpeg?fit=960%2C960',
            'email' => 'sarah@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'sarahpassword',
            'type_user' => 'ballet teacher',
        ],
        [
            'name' => 'halma',
            'lastname' => 'pineda',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e0/ContemporaryBalletLeap.jpg',
            'email' => 'halma@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'halmapassword',
            'type_user' => 'ballet teacher',
        ],
        [
            'name' => 'shea',
            'lastname' => 'frederick',
            'image' => 'https://assets.rbl.ms/9878181/origin.jpg',
            'email' => 'shea@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'sheapassword',
            'type_user' => 'ballet teacher',
        ],
        [
            'name' => 'natalya',
            'lastname' => 'malone',
            'image' => 'https://danceparent101.com/wp-content/uploads/2020/03/DP101-PI-What-Qualifications-Do-I-Need-to-be-a-Dance-Teacher_-1024x640.jpg',
            'email' => 'natalya@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'natalyapassword',
            'type_user' => 'ballet teacher',
        ],
        [
            'name' => 'humberto',
            'lastname' => 'blair',
            'image' => 'https://damedoshu.com/wp-content/uploads/2018/07/1-Maykel-Fonts.jpg',
            'email' => 'humberto@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'humbertopassword',
            'type_user' => 'salsa teacher',
        ],
        [
            'name' => 'jayda',
            'lastname' => 'guerra',
            'image' => 'http://grandcanyonsalsafestival.com/wp-content/uploads/2015/11/angel_ortiz.jpg',
            'email' => 'jayda@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'jaydapassword',
            'type_user' => 'salsa teacher',
        ],
        [
            'name' => 'madelynn',
            'lastname' => 'moreno',
            'image' => 'https://pbs.twimg.com/profile_images/508064052057497600/eS413B8v.jpeg',
            'email' => 'madelynn@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'madelynnpassword',
            'type_user' => 'salsa teacher',
        ],
        [
            'name' => 'harmony',
            'lastname' => 'mueller',
            'image' => 'https://www.latinenergydance.com/wp-content/uploads/2017/02/Toronto.Salsa_.Bachata.Tango_.Mark_.jpg',
            'email' => 'harmony@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'harmonypassword',
            'type_user' => 'salsa teacher',
        ],
        [
            'name' => 'janiya',
            'lastname' => 'reeves',
            'image' => 'https://www.superprof.ie/images/teachers/teacher-home-dancer-dance-teacher-and-choreographer-gives-dance-lessons-different-styles-ballet-contemporary-dance-salsa-comercial-dance.jpg',
            'email' => 'janiya@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'janiyapassword',
            'type_user' => 'salsa teacher',
        ],
        [
            'name' => 'william',
            'lastname' => 'york',
            'image' => 'https://danceintl.com/wp-content/uploads/2019/08/Yoandy-Villaurrutia.jpg',
            'email' => 'william@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'williampassword',
            'type_user' => 'hip hop teacher',
        ],
        [
            'name' => 'landen',
            'lastname' => 'jarvis',
            'image' => 'https://media.istockphoto.com/photos/happiness-is-dancing-young-and-positive-dance-teacher-making-a-selfie-picture-id1209740878?k=6&m=1209740878&s=170667a&w=0&h=r152v1TV_eDZOoX8P9HTyzj5cle_2Rk7ztIuBntud_8=',
            'email' => 'landen@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'landenpassword',
            'type_user' => 'hip hop teacher',
        ],
        [
            'name' => 'nylah',
            'lastname' => 'murphy',
            'image' => 'https://www.thisgirlisonfire.com/wp-content/uploads/2020/08/Gabrielle-Bernstein.jpg',
            'email' => 'nylah@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'nylahpassword',
            'type_user' => 'hip hop teacher',
        ],
        [
            'name' => 'carissa',
            'lastname' => 'frederick',
            'image' => 'https://www.barnsleychronicle.com/storage/articles/January2015/3431d010-16aa-4191-8ba6-f0ee80ff21b8.jpg',
            'email' => 'carissa@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'carissapassword',
            'type_user' => 'hip hop teacher',
        ],
        [
            'name' => 'alvaro',
            'lastname' => 'walter',
            'image' => 'https://www.superprof.com/images/teachers/teacher-home-afro-dance-teacher-hip-hop-and-urban-dances-pop-commercial-freestyle-with-dance-hall-paris.jpg',
            'email' => 'alvaro@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'alvaropassword',
            'type_user' => 'hip hop teacher',
        ],
        [
            'name' => 'ignacio',
            'lastname' => 'golden',
            'image' => 'https://bookingagentinfo.com/wp-content/uploads/2020/06/usher.jpg',
            'email' => 'ignacio@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'ignaciopassword',
            'type_user' => 'hip hop teacher',
        ],
        [
            'name' => 'marin',
            'lastname' => 'hopkins',
            'image' => 'https://staticg.sportskeeda.com/editor/2021/02/994da-16123805209224-800.jpg',
            'email' => 'marin@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'marinpassword',
            'type_user' => 'hip hop teacher',
        ],
        [
            'name' => 'keith',
            'lastname' => 'haynes',
            'image' => 'https://www.biography.com/.image/t_share/MTM2OTI2NTY2Mjg5NTE2MTI5/justin_bieber_2015_photo_courtesy_dfree_shutterstock_348418241_croppedjpg.jpg',
            'email' => 'keith@monsite.com',
            'roles' => ['ROLE_TEACHER'],
            'password' => 'keithpassword',
            'type_user' => 'hip hop teacher',
        ],
    ];

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $typeUsers = $manager->getRepository(TypeUser::class)->findAll();
        $typeUsersObjects = [];

        foreach ($typeUsers as $data) {
            $typeUsersObjects[$data->getTypeuser()] = $data;
        }

        foreach (self::USERS as $data) {
            $user = new User();
            $user->setName($data['name']);
            $user->setLastName($data['lastname']);

            if ($typeUsersObjects[$data['type_user']]) {
                $user->setTypeuser($typeUsersObjects[$data['type_user']]);
            }

            if (empty($data['image'])) {
                $user->setImage('https://www.xn--vnementiel-96ab.net/wp-content/uploads/2014/02/default-placeholder.png');
            } else {
                $user->setImage($data['image']);
            }

            $user->setEmail($data['email']);
            $user->setRoles($data['roles']);
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                $data['password'],
            ));

            $manager->persist($user);
        }

        $manager->flush();
    }
}
