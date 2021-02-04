<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Dance;
use App\Service\Slugify;

class DanceFixtures extends Fixture
{
    const DANCE = [
        'hip hop' => [
            'image' => 'https://i.pinimg.com/originals/5b/55/6d/5b556def67725ac428e109d19dad26cd.jpg',
            'description' => "Hip hop music, also known as rap music,[5][6] is a genre of popular music developed in the United States by inner-city African Americans and Latino Americans[7] in the Bronx borough of New York City in the 1970s. It consists of a stylized rhythmic music that commonly accompanies rapping, a rhythmic and rhyming speech that is chanted.[8] It developed as part of hip hop culture, a subculture defined by four key stylistic elements: MCing/rapping, DJing/scratching with turntables, break dancing, and graffiti writing.[9][10][11] Other elements include sampling beats or bass lines from records (or synthesized beats and sounds), and rhythmic beatboxing. While often used to refer solely to rapping, \"hip hop\" more properly denotes the practice of the entire subculture.[12][13] The term hip hop music is sometimes used synonymously with the term rap music,[8][14] though rapping is not a required component of hip hop music; the genre may also incorporate other elements of hip hop culture, including DJing, turntablism, scratching, beatboxing, and instrumental tracks.",
        ],
        'salsa' => [
            'image' => 'https://www.liveabout.com/thmb/JS0NvnJu3SEg1OTAzwfR7g0fSHo=/4268x3201/smart/filters:no_upscale()/hispanic-salsa-dancers-performing-580491737-5b72290ac9e77c0050753fb0.jpg',
            'description' => "Salsa is a Latin dance associated with the music genre of the same name which originated in the 1960s in New York City.[1][2][3] Salsa is an amalgamation of Puerto Rican, Dominican and Cuban dances that were popular in the ballrooms and nightclubs of San Juan and la Havana by the end of the 1950s (e.g. \"casino\", mambo and pachanga), as well as American jazz dances. It was primarily developed by Dominicans and Puerto Ricans living in New York in the late 1960s and early 1970s.[4] Different regions of Latin America and the United States have distinct salsa styles of their own, such as Cuban, Dominican, Puerto Rican, Cali Colombia, L.A. and New York styles. Salsa dance socials are commonly held in nightclubs, bars, ballrooms, restaurants, and outside, especially when part of an outdoor festival.",
        ],
        "ballet" => [
            'image' => "https://bsp-static.playbill.com/1e/22/faf45a4c4f539ca41bab992512a4/redsparrow-isabellaboylston-hr.jpg",
            'description' => "Ballet (French: [balɛ]) is a type of performance dance that originated during the Italian Renaissance in the fifteenth century and later developed into a concert dance form in France and Russia. It has since become a widespread and highly technical form of dance with its own vocabulary. Ballet has been influential globally and has defined the foundational techniques which are used in many other dance genres and cultures. Various schools around the world have incorporated their own cultures. As a result ballet has evolved in distinct ways.",
        ],
        "danse comtemporaine" => [
            'image' => "https://media-exp1.licdn.com/dms/image/C561BAQGRQDU6ETd7KQ/company-background_10000/0/1573868861455?e=2159024400&v=beta&t=qHVcYO3iIPHqzZ8WnhPUdTx_XaFrTLzUT2EmCD48yss",
            'description' => "La danse aujourd'hui nommée danse contemporaine naît en Europe et aux États-Unis après la Seconde Guerre mondiale. Elle fait suite à la danse moderne et débute, pour certains, avec les courants postmodernistes.",
        ],
        "melbourne shuffle" => [
            'image' => "https://i.pinimg.com/originals/b9/52/32/b95232334cc0580d75a888b7ab201b32.jpg",
            'description' => "The Melbourne shuffle is a rave dance that developed in the 1980s.[1] Typically performed to electronic music, the dance originated in the Melbourne rave scene, and was popular in the 1980s and 1990s.[2] The dance moves involve a fast heel-and-toe movement or T-step, combined with a variation of the running man coupled with a matching arm action.[1] The dance is improvised and involves \"repeatedly shuffling your feet inwards, then outwards, while thrusting your arms up and down, or side to side, in time with the beat\". Other moves can be incorporated including 360-degree spins and jumps and slides.[2] Popular Melbourne clubs during the dance's heyday included Chasers, Heat, Mercury Lounge, Viper, Two Tribes and PHD.",
        ],
        "tap dance" => [
            'image' => "https://www.progressivedancestudio.com/wp-content/uploads/2020/03/beginners-guide-to-tap-dance-1.jpg",
            'description' => "Tap dance is a type of dance characterised by using the sounds of metal taps affixed to the heel and toe of shoes striking the floor as a form of percussion, coupled with both characteristic and interpretative body movements. Its roots were in minstrel shows, it gained prominence in vaudeville, then emerged into an art form and means of expression alongside the evolution of jazz. There are several styles of tap dance, including rhythm (jazz), classical, Broadway, and post-modern. Rhythm tap, the most celebrated and best known, focuses on musicality, and practitioners consider themselves to be a part of the jazz tradition and as such, improvisation is essential to their work. Many influential rhythm tap dancers were members of the Hoofers Club. Soft-shoe is a close relative of rhythm tap dancing that does not require tap shoes. Rhythm is generated by tapping the feet, and also by sliding the feet (sometimes using scattered sand on the stage to enhance the sound of sliding feet). It produced what is currently considered to be modern tap, but has since declined in popularity.[citation needed] Classical tap has a similarly long tradition which marries European \"classical\" music with American foot drumming with a wide variation in full-body expression. Broadway tap often focuses on formations, choreography and generally less complex rhythms; it is widely performed in musical theatre. Post-modern or contemporary tap has emerged over the last three decades to incorporate abstract expression, thematic narrative and technology.",
        ],
        "polka dance" => [
            'image' => "https://bridgemusik.com/images/resources/tango2020/Polka1.jpg",
            'description' => "The term polka possibly comes from the Czech word \"půlka\" (\"half\"), referring to the short half-steps featured in the dance.[1] Czech cultural historian and ethnographer Čeněk Zíbrt, who wrote in detail about the origin of the dance, in his book, Jak se kdy v Čechách tancovalo[2] cites an opinion of František Doucha (1840, Květy, p. 400) that \"polka\" was supposed to mean \"dance in half\" (\"tanec na polo\"), both referring to the half-tempo 24 and the half-jump step of the dance. Zíbrt ironically dismisses the etymology suggested by A. Fähnrich (in Ein etymologisches Taschenbuch, Jiein, 1846) that \"polka\" comes from the Czech word \"pole\" (\"field\").[2] On the other hand, Zdeněk Nejedlý suggests that the etymology given by Fr. Doucha is nothing but an effort to prove the \"true Czech folk\" origin of polka.",
        ],
    ];

    private $slugify;

    public function __construct(Slugify $slugify)
    {
        $this->slugify = $slugify;
    }

    public function load(ObjectManager $manager)
    {
        foreach (self::DANCE as $name => $data) {
            $dance = new Dance();

            $dance->setName($name);
            $slug = $this->slugify->generate($dance->getName());
            $dance->setSlug($slug);
            $dance->setImage($data['image']);
            $dance->setDescription($data['description']);

            $manager->persist($dance);
        }

        $manager->flush();
    }
}
