<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Hobby;

class LoadHobbyData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    
    public function load(ObjectManager $manager)
    {
        $allHobbyValues=
        [
            [
                'title'=>'Бокс',
                'description'=>'Вихрь изотропно излучает наносекундный взрыв, в итоге возможно появление обратной связи и самовозбуждение системы. Тело, как можно показать с помощью не совсем тривиальных вычислений, стабилизирует квазар. Волна, несмотря на некоторую вероятность коллапса, ускоряет квантовый эксимер. Если предварительно подвергнуть объекты длительному вакуумированию, то экситон вращает экзотермический эксимер. В соответствии с принципом неопределенности, сверхпроводник выталкивает лазер.',
                'priceScale'=>2,
                'activityScale'=>4,
                'creativityScale'=>0,
                'hobbyCategory'=>$this->getReference('hobbyCategory2'),
            ],
            
            [
                'title'=>'MMA',
                'description'=>'Вещество, по данным астрономических наблюдений, коаксиально индуцирует луч. Если для простоты пренебречь потерями на теплопроводность, то видно, что возмущение плотности сжимает погранслой. Взвесь волнообразна. Призма масштабирует фронт, при этом дефект массы не образуется. Излучение неверифицируемо трансформирует фронт. Не только в вакууме, но и в любой нейтральной среде относительно низкой плотности поверхность вращает гидродинамический удар.',
                'priceScale'=>3,
                'activityScale'=>5,
                'creativityScale'=>0,
                'hobbyCategory'=>$this->getReference('hobbyCategory2'),
            ],
            
            [
                'title'=>'Карате',
                'description'=>'Еще в ранних работах Л.Д.Ландау показано, что квант квантово разрешен. Солитон, как бы это ни казалось парадоксальным, излучает взрыв. Вещество стабилизирует нестационарный погранслой. Гетерогенная структура, если рассматривать процессы в рамках специальной теории относительности, усиливает фронт. Галактика скалярна.',
                'priceScale'=>3,
                'activityScale'=>4,
                'creativityScale'=>0,
                'hobbyCategory'=>$this->getReference('hobbyCategory2'),
            ],
            
            [
                'title'=>'Бодибилдинг',
                'description'=>'Луч расщепляет нестационарный кристалл. В условиях электромагнитных помех, неизбежных при полевых измерениях, не всегда можно опредлить, когда именно вселенная параллельна. Кварк синхронизует тахионный кристалл. Гомогенная среда параллельна. Лептон отклоняет плазменный магнит.',
                'priceScale'=>2,
                'activityScale'=>3,
                'creativityScale'=>1,
                'hobbyCategory'=>$this->getReference('hobbyCategory3'),
            ],
            
            [
                'title'=>'Воркаут',
                'description'=>'Фонон, на первый взгляд, расщепляет пульсар. Любое возмущение затухает, если квант тормозит фронт. Турбулентность сжимает взрыв. Квант перманентно отражает расширяющийся атом. Электрон возбуждает вихрь. Очевидно, что излучение притягивает изобарический фронт.',
                'priceScale'=>1,
                'activityScale'=>2,
                'creativityScale'=>0,
                'hobbyCategory'=>$this->getReference('hobbyCategory3'),
            ],
            
            [
                'title'=>'Плавание',
                'description'=>'Возмущение плотности возбудимо. Линза, несмотря на внешние воздействия, излучает вихревой гамма-квант. Магнит, как неоднократно наблюдалось при постоянном воздействии ультрафиолетового облучения, квантуем. Исследователями из разных лабораторий неоднократно наблюдалось, как возмущение плотности синфазно излучает элементарный осциллятор. Вещество масштабирует разрыв.',
                'priceScale'=>2,
                'activityScale'=>3,
                'creativityScale'=>0,
                'hobbyCategory'=>$this->getReference('hobbyCategory1'),
            ],
            
            [
                'title'=>'Бег',
                'description'=>'Как легко получить из самых общих соображений, тело конфокально синхронизует циркулирующий солитон. Химическое соединение отклоняет экситон. Очевидно, что зеркало синфазно испускает квазар одинаково по всем направлениям. Атом сжимает коллапсирующий эксимер. Жидкость, в отличие от классического случая, масштабирует экранированный фотон.',
                'priceScale'=>0,
                'activityScale'=>2,
                'creativityScale'=>0,
                'hobbyCategory'=>$this->getReference('hobbyCategory1'),
            ],
            
            [
                'title'=>'Гимнастика',
                'description'=>'Если для простоты пренебречь потерями на теплопроводность, то видно, что экситон теоретически возможен. При погружении в жидкий кислород частица катастрофично расщепляет разрыв. Интерпретация всех изложенных ниже наблюдений предполагает, что еще до начала измерений сверхновая облучает резонатор. Химическое соединение, на первый взгляд, вертикально отклоняет коллапсирующий солитон.',
                'priceScale'=>2,
                'activityScale'=>3,
                'creativityScale'=>1,
                'hobbyCategory'=>$this->getReference('hobbyCategory1'),
            ],
            
            [
                'title'=>'Футбол',
                'description'=>'Кристалл, несмотря на внешние воздействия, отражает торсионный газ. Поток, несмотря на внешние воздействия, мономолекулярно растягивает луч. Интерпретация всех изложенных ниже наблюдений предполагает, что еще до начала измерений зеркало синхронно.',
                'priceScale'=>2,
                'activityScale'=>3,
                'creativityScale'=>0,
                'hobbyCategory'=>$this->getReference('hobbyCategory4'),
            ],
            
            [
                'title'=>'Баскетбол',
                'description'=>'Объект, вследствие квантового характера явления, зеркально заряжает тахионный лептон. В условиях электромагнитных помех, неизбежных при полевых измерениях, не всегда можно опредлить, когда именно волновая тень катастрофично притягивает экситон почти так же, как в резонаторе газового лазера. Разрыв отражает газ. Неустойчивость, как известно, быстро разивается, если поток переворачивает бозе-конденсат.',
                'priceScale'=>2,
                'activityScale'=>3,
                'creativityScale'=>0,
                'hobbyCategory'=>$this->getReference('hobbyCategory4'),
            ],
            
            [
                'title'=>'Волейбол',
                'description'=>'При наступлении резонанса галактика расщепляет вихрь. Погранслой, в отличие от классического случая, ненаблюдаемо облучает осциллятор без обмена зарядами или спинами. Бозе-конденсат квантуем. Вселенная испускает фотон в том случае, когда процессы переизлучения спонтанны. Непосредственно из законов сохранения следует, что лазер эллиптично притягивает фонон. Излучение, по данным астрономических наблюдений, испускает гравитационный погранслой.',
                'priceScale'=>2,
                'activityScale'=>3,
                'creativityScale'=>0,
                'hobbyCategory'=>$this->getReference('hobbyCategory4'),
            ],
            
            [
                'title'=>'Теннис',
                'description'=>'Химическое соединение, несмотря на некоторую вероятность коллапса, вращает адронный квазар одинаково по всем направлениям. Химическое соединение облучает векторный солитон по мере распространения сигнала в среде с инверсной населенностью. Химическое соединение отталкивает вихревой магнит, в итоге возможно появление обратной связи и самовозбуждение системы.',
                'priceScale'=>2,
                'activityScale'=>2,
                'creativityScale'=>0,
                'hobbyCategory'=>$this->getReference('hobbyCategory4'),
            
            ],
            
            [
                'title'=>'Коньки',
                'description'=>'Возмущение плотности излучает фонон. Кварк отталкивает векторный пульсар. Плазменное образование, как и везде в пределах наблюдаемой вселенной, устойчиво возбуждает экранированный сверхпроводник. Излучение вращает фотон. Непосредственно из законов сохранения следует, что фонон изотермично восстанавливает лептон, но никакие ухищрения экспериментаторов не позволят наблюдать этот эффект в видимом диапазоне. Зеркало, при адиабатическом изменении параметров, активно.',
                'priceScale'=>2,
                'activityScale'=>3,
                'creativityScale'=>0,
                'hobbyCategory'=>$this->getReference('hobbyCategory5'),
            ],
            
            [
                'title'=>'Лыжи',
                'description'=>'Излучение поглощает фотон. Турбулентность спонтанно облучает гамма-квант. Идеальная тепловая машина расщепляет лазер, и это неудивительно, если вспомнить квантовый характер явления. Химическое соединение самопроизвольно. Очевидно, что силовое поле расщепляет наносекундный объект. Расслоение растягивает термодинамический гамма-квант.',
                'priceScale'=>2,
                'activityScale'=>3,
                'creativityScale'=>0,
                'hobbyCategory'=>$this->getReference('hobbyCategory5'),
            ],
            
            [
                'title'=>'Паркур',
                'description'=>'Колебание однородно стабилизирует нестационарный квант, и этот процесс может повторяться многократно. Лазер неустойчив относительно гравитационных возмущений. Еще в ранних работах Л.Д.Ландау показано, что фонон отражает экситон. Мишень восстанавливает изобарический атом.',
                'priceScale'=>0,
                'activityScale'=>4,
                'creativityScale'=>2,
                'hobbyCategory'=>$this->getReference('hobbyCategory6'),
            ],
            
            [
                'title'=>'Скейтборд',
                'description'=>'Гидродинамический удар, вследствие квантового характера явления, пространственно отталкивает расширяющийся экситон. Зеркало, как того требуют законы термодинамики, отрицательно заряжено. Солитон, несмотря на внешние воздействия, изотермично масштабирует пульсар.',
                'priceScale'=>0,
                'activityScale'=>4,
                'creativityScale'=>2,
                'hobbyCategory'=>$this->getReference('hobbyCategory6'),
            ],
            
            [
                'title'=>'Байкинг',
                'description'=>'Резонатор вторично радиоактивен. Плазменное образование, как можно показать с помощью не совсем тривиальных вычислений, косвенно. При погружении в жидкий кислород лептон расщепляет взрыв.',
                'priceScale'=>2,
                'activityScale'=>4,
                'creativityScale'=>2,
                'hobbyCategory'=>$this->getReference('hobbyCategory6'),
            ],
            
            [
                'title'=>'Брейкданс',
                'description'=>'Квант исключен по определению. Возмущение плотности конфокально трансформирует осциллятор при любом их взаимном расположении. Резонатор вертикально выталкивает гамма-квант.',
                'priceScale'=>0,
                'activityScale'=>3,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory8'),
            ],
            
            [
                'title'=>'Хип-хоп',
                'description'=>'Силовое поле виртуально. В самом общем случае гравитирующая сфера неустойчиво нейтрализует нестационарный пульсар. В слабопеременных полях (при флуктуациях на уровне единиц процентов) туманность выталкивает расширяющийся погранслой, но никакие ухищрения экспериментаторов не позволят наблюдать этот эффект в видимом диапазоне. Лазер заряжает субсветовой эксимер.',
                'priceScale'=>0,
                'activityScale'=>3,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory8'),
            ],
//тут я сдох            
            [
                'title'=>'Ролики',
                'description'=>'При наступлении резонанса призма едва ли квантуема. Кристалл, на первый взгляд, когерентно вращает эксимер. Туманность волнообразна. Турбулентность отражает тахионный эксимер как при нагреве, так и при охлаждении.',
                'priceScale'=>5,
                'activityScale'=>4,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory7'),
            ],
            
            [
                'title'=>'Охота',
                'description'=>'Струя, как и везде в пределах наблюдаемой вселенной, синхронизует осциллятор, как и предсказывает общая теория поля. Возмущение плотности ненаблюдаемо масштабирует циркулирующий экситон без обмена зарядами или спинами. Если для простоты пренебречь потерями на теплопроводность, то видно, что гетерогенная структура бифокально облучает экранированный резонатор.',
                'priceScale'=>5,
                'activityScale'=>4,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory7'),
            ],
            
            [
                'title'=>'Рыбалка',
                'description'=>'Сингулярность, в рамках ограничений классической механики, неустойчива. Вселенная изотропно нейтрализует лазер. Еще в ранних работах Л.Д.Ландау показано, что газ возбуждает экситон почти так же, как в резонаторе газового лазера. Молекула восстанавливает гравитационный атом. Туманность масштабирует лептон - все дальнейшее далеко выходит за рамки текущего исследования и не будет здесь рассматриваться.',
                'priceScale'=>5,
                'activityScale'=>4,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory7'),
            ],
            
            [
                'title'=>'Верховая езда',
                'description'=>'Экситон концентрирует фотон. Ударная волна стабилизирует фотон. В соответствии с принципом неопределенности, сверхновая тормозит гидродинамический удар. Колебание спонтанно вращает атом только в отсутствие тепло- и массообмена с окружающей средой. Гомогенная среда изотропно облучает квантовый фронт. Квазар облучает экситон.',
                'priceScale'=>5,
                'activityScale'=>4,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory7'),
            ],
            
            [
                'title'=>'Граффити',
                'description'=>'Неустойчивость, как известно, быстро разивается, если плазма индуцирует луч. Любое возмущение затухает, если квант спонтанно притягивает плазменный пульсар. Тело перманентно сжимает бозе-конденсат.',
                'priceScale'=>5,
                'activityScale'=>4,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory7'),
            ],
            
            [
                'title'=>'Хенд-мейд',
                'description'=>'Кристалл трансформирует плоскополяризованный объект. В слабопеременных полях (при флуктуациях на уровне единиц процентов) зеркало коаксиально концентрирует плазменный атом при любом их взаимном расположении. Течение среды однородно трансформирует фронт при любом агрегатном состоянии среды взаимодействия.',
                'priceScale'=>5,
                'activityScale'=>4,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory10'),
            ],
            
            [
                'title'=>'Бисероплетение',
                'description'=>'Не только в вакууме, но и в любой нейтральной среде относительно низкой плотности гидродинамический удар облучает пульсар. Гидродинамический удар, по данным астрономических наблюдений, искажает взрыв. Расслоение излучает взрыв. Молекула, как и везде в пределах наблюдаемой вселенной, коаксиально сжимает торсионный осциллятор. Мишень одномерно масштабирует взрыв. Интерпретация всех изложенных ниже наблюдений предполагает, что еще до начала измерений примесь бифокально ускоряет субсветовой электрон.',
                'priceScale'=>5,
                'activityScale'=>4,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory10'),
            ],
            
            [
                'title'=>'Игра на гитаре',
                'description'=>'Ударная волна пространственно сжимает фонон. При наступлении резонанса магнит облучает резонатор. Колебание отклоняет тахионный бозе-конденсат. Как легко получить из самых общих соображений, молекула бифокально возбуждает вихрь.',
                'priceScale'=>5,
                'activityScale'=>4,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory11'),
            ],
            
            [
                'title'=>'Создание музыки',
                'description'=>'Кристаллическая решетка бифокально заряжает электрон. Взрыв нейтрализует межядерный лептон. Вещество одномерно синхронизует кристалл, но никакие ухищрения экспериментаторов не позволят наблюдать этот эффект в видимом диапазоне. Взвесь концентрирует изотопный фронт.',
                'priceScale'=>5,
                'activityScale'=>4,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory11'),
            ],
            
            [
                'title'=>'Блогинг',
                'description'=>'Любое возмущение затухает, если среда коаксиально возбуждает электронный разрыв. Плазменное образование расщепляет изотопный луч. Течение среды зеркально. Квантовое состояние, если рассматривать процессы в рамках специальной теории относительности, отрицательно заряжено. Волна выталкивает сверхпроводник. Квантовое состояние волнообразно.',
                'priceScale'=>5,
                'activityScale'=>4,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory9'),
            ],
            
            [
                'title'=>'Кулинария',
                'description'=>'Течение среды, как можно показать с помощью не совсем тривиальных вычислений, притягивает квазар. Исследователями из разных лабораторий неоднократно наблюдалось, как осциллятор противоречиво вращает погранслой. Течение среды, несмотря на внешние воздействия, стабилизирует кварк. Зеркало, вследствие квантового характера явления, сжимает межатомный луч так, как это могло бы происходить в полупроводнике с широкой запрещенной зоной.',
                'priceScale'=>5,
                'activityScale'=>4,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory9'),
            ],
            
            [
                'title'=>'Фотография',
                'description'=>'При наступлении резонанса призма едва ли квантуема. Кристалл, на первый взгляд, когерентно вращает эксимер. Туманность волнообразна. Турбулентность отражает тахионный эксимер как при нагреве, так и при охлаждении.',
                'priceScale'=>5,
                'activityScale'=>4,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory9'),
            ],
            
            [
                'title'=>'Фокусы',
                'description'=>'Волновая тень стохастично вращает гравитационный фотон. Экситон, если рассматривать процессы в рамках специальной теории относительности, асферично усиливает расширяющийся разрыв. Бозе-конденсат заряжает тахионный гамма-квант. В самом общем случае ударная волна растягивает термодинамический экситон почти так же, как в резонаторе газового лазера.',
                'priceScale'=>5,
                'activityScale'=>4,
                'creativityScale'=>3,
                'hobbyCategory'=>$this->getReference('hobbyCategory9'),
            ],     
        ];
        $hobbies=[];
        $activityScale=$this->getReference('activityScale');
        $creativityScale=$this->getReference('creativityScale');
        $priceScale=$this->getReference('priceScale');
        
        $hobbyLogic=$this->container->get('app.logic.hobby_logic');
        $c=0;
        foreach ($allHobbyValues as $hobbyValues)
        {
            $hobby = new Hobby();
            $hobby->setTitle($hobbyValues['title']);
            $hobby->setDescription($hobbyValues['description']);
//            $hobby->setPriceScale(5);
//            $hobby->setActivityScale(4);
//            $hobby->setCreativityScale(3);
            $hobby->setHobbyCategory($hobbyValues['hobbyCategory']);
            $manager->persist($hobby);
            $manager->flush();
            $hobbyLogic->setHobbyScaleValue($hobby,$activityScale,20*$hobbyValues['activityScale']);
            $hobbyLogic->setHobbyScaleValue($hobby,$creativityScale,20*$hobbyValues['creativityScale']);
            $hobbyLogic->setHobbyScaleValue($hobby,$priceScale,20*$hobbyValues['priceScale']);
            $hobbies[]=$hobby;
            $c++;
            $this->addReference("hobby$c", $hobby);
        }

/*
        $i=0;

        $this->addReference('hobby1', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article1'));
        $hobbies[$i]->addArticle($this->getReference('article2'));        
        $hobbies[$i]->addModerator($this->getReference('user2'));  
        $i++;
        $this->addReference('hobby2', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article1'));
        $hobbies[$i]->addArticle($this->getReference('article2'));         

        $i++;
        $this->addReference('hobby3', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article3'));         

        $i++;
        $this->addReference('hobby4', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article3'));
        $hobbies[$i]->addArticle($this->getReference('article4'));         

        $i++;
        $this->addReference('hobby5', $hobbies[$i]);
        $hobbies[$i]->addArticle($this->getReference('article5'));
        $hobbies[$i]->addArticle($this->getReference('article6'));   

        $i++;
        $this->addReference('hobby6', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article7'));
        $hobbies[$i]->addArticle($this->getReference('article8'));
        $hobbies[$i]->addArticle($this->getReference('article9'));               

        $i++;
        $this->addReference('hobby7', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article7'));
        $hobbies[$i]->addArticle($this->getReference('article8'));
        $hobbies[$i]->addArticle($this->getReference('article9'));         

        $i++;
        $this->addReference('hobby8', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article10'));
        $hobbies[$i]->addArticle($this->getReference('article11'));
        $hobbies[$i]->addArticle($this->getReference('article12'));         

        $i++;
        $this->addReference('hobby9', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article13'));      

        $i++;
        $this->addReference('hobby10', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article14'));  
        $hobbies[$i]->addArticle($this->getReference('article20'));
        $hobbies[$i]->addArticle($this->getReference('article25'));                          

        $i++;
        $this->addReference('hobby11', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article1'));  
        $hobbies[$i]->addArticle($this->getReference('article10'));
        $hobbies[$i]->addArticle($this->getReference('article30'));        

        $i++;
        $this->addReference('hobby12', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article15'));  
        $hobbies[$i]->addArticle($this->getReference('article16'));
        $hobbies[$i]->addArticle($this->getReference('article17'));           

        $i++;
        $this->addReference('hobby13', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article18'));  
        $hobbies[$i]->addArticle($this->getReference('article19'));
        $hobbies[$i]->addArticle($this->getReference('article29'));         

        $i++;
        $this->addReference('hobby14', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article20'));  
        $hobbies[$i]->addArticle($this->getReference('article21'));
        $hobbies[$i]->addArticle($this->getReference('article28'));  

        $i++;
        $this->addReference('hobby15', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article22'));  
        $hobbies[$i]->addArticle($this->getReference('article23'));
        $hobbies[$i]->addArticle($this->getReference('article27'));         

        $i++;
        $this->addReference('hobby16', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article24'));  
        $hobbies[$i]->addArticle($this->getReference('article25'));
        $hobbies[$i]->addArticle($this->getReference('article26'));          

        $i++;
        $this->addReference('hobby17', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article27'));  

        $i++;
        $this->addReference('hobby18', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article28'));          

        $i++;
        $this->addReference('hobby19', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article29'));           

        $i++;
        $this->addReference('hobby20', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article30')); 
        $hobbies[$i]->addArticle($this->getReference('article1'));                 

        $i++;
        $this->addReference('hobby21', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article29')); 
        $hobbies[$i]->addArticle($this->getReference('article2'));          

        $i++;
        $this->addReference('hobby22', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article28')); 
        $hobbies[$i]->addArticle($this->getReference('article3'));         

        $i++;
        $this->addReference('hobby23', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article27'));         

        $i++;
        $this->addReference('hobby24', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article26'));   
        $hobbies[$i]->addArticle($this->getReference('article4'));                  

        $i++;
        $this->addReference('hobby25', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article25'));   
        $hobbies[$i]->addArticle($this->getReference('article5'));          

        $i++;
        $this->addReference('hobby26', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article24'));           

        $i++;
        $this->addReference('hobby27', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article23'));            

        $i++;
        $this->addReference('hobby28', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article22'));           

        $i++;
        $this->addReference('hobby29', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article21')); 
        $hobbies[$i]->addArticle($this->getReference('article10'));         

        $i++;
        $this->addReference('hobby30', $hobbies[$i]);
        $hobbies[$i]->addArticle($this->getReference('article20')); 
        $hobbies[$i]->addArticle($this->getReference('article12'));          

        $i++;
        $this->addReference('hobby31', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article19')); 
        $hobbies[$i]->addArticle($this->getReference('article15'));         

        $i++;
        $this->addReference('hobby32', $hobbies[$i]); 
        $hobbies[$i]->addArticle($this->getReference('article18')); 
        $hobbies[$i]->addArticle($this->getReference('article16'));          


*/
        $manager->flush();

    }
    
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}
