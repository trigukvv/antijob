<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Comment;

class LoadCommentData extends AbstractFixture implements OrderedFixtureInterface
{ 
    
    public function load(ObjectManager $manager)
    {
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-09-27 17:30:55"));
        $comment->setContent('Пленум Высшего Арбитражного Суда неоднократно разъяснял, как поручительство защищает ничтожный гарант. ');
        $comment->setArticle($this->getReference('article1'));        
        $comment->setAuthor($this->getReference('user1'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-08-19 15:51:50"));
        $comment->setContent('При приватизации имущественного комплекса преступление трансформирует казенный платежный документ, хотя законодательством может быть установлено иное.');
        $comment->setArticle($this->getReference('article2'));        
        $comment->setAuthor($this->getReference('user1'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-09-22 08:17:09"));
        $comment->setContent('Правоспособность, в согласии с традиционными представлениями, нормативно запрещает правомерный платежный документ.');
        $comment->setArticle($this->getReference('article3'));        
        $comment->setAuthor($this->getReference('user1'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-02-07 03:08:55"));
        $comment->setContent('Спирт восстанавливает фотосинтетический краситель, даже если нанотрубки меняют свою межплоскостную ориентацию. ');
        $comment->setArticle($this->getReference('article4'));        
        $comment->setAuthor($this->getReference('user2'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-09-13 23:28:16"));
        $comment->setContent('Выпаривание огромно. В самом общем случае брожение мягко отравляет раствор. ');
        $comment->setArticle($this->getReference('article5'));        
        $comment->setAuthor($this->getReference('user2'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-09-16 03:22:26"));
        $comment->setContent('Белый пушистый осадок селективно диазотирует батохромный пигмент.');
        $comment->setArticle($this->getReference('article1'));        
        $comment->setAuthor($this->getReference('user2'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-03-30 03:56:01"));
        $comment->setContent('Эксикатор облучает энергетический опыт. Электролиз ясен. ');
        $comment->setArticle($this->getReference('article2'));        
        $comment->setAuthor($this->getReference('user3'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-09-22 15:10:15"));
        $comment->setContent('Волокно, в отличие от классического случая, окисляет спектроскопический имидазол.');
        $comment->setArticle($this->getReference('article3'));        
        $comment->setAuthor($this->getReference('user3'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-08-25 09:08:10"));
        $comment->setContent('Бюретка представляет собой анод. Индуцированное соответствие расщепляет коллоидный ионообменник. ');
        $comment->setArticle($this->getReference('article4'));        
        $comment->setAuthor($this->getReference('user3'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-06-16 17:33:39"));
        $comment->setContent('Волокно ферментативно заставляет гетероциклический имидазол, при этом наноразмерные частички золота создают мицеллу. ');
        $comment->setArticle($this->getReference('article5'));        
        $comment->setAuthor($this->getReference('user4'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-10-19 09:26:02"));
        $comment->setContent('При осуществлении искусственных ядерных реакций было доказано, что сворачивание ядовито.');
        $comment->setArticle($this->getReference('article6'));        
        $comment->setAuthor($this->getReference('user4'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-06-15 19:32:37"));
        $comment->setContent('Приведенные данные указывают на то, что брожение титрует интермедиат. ');
        $comment->setArticle($this->getReference('article7'));        
        $comment->setAuthor($this->getReference('user4'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-07-08 01:29:02"));
        $comment->setContent('Выпадение титрует батохромный голубой гель. Волокно мгновенно.');
        $comment->setArticle($this->getReference('article8'));        
        $comment->setAuthor($this->getReference('user5'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-03-12 04:44:12"));
        $comment->setContent('Царская водка активирует пептидный продукт реакции.');
        $comment->setArticle($this->getReference('article9'));        
        $comment->setAuthor($this->getReference('user5'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-07-02 01:18:51"));
        $comment->setContent('Рутений методически восстанавливает инициированный имидазол. Белок затрудняет опыт. ');
        $comment->setArticle($this->getReference('article10'));        
        $comment->setAuthor($this->getReference('user5'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-03-13 23:09:45"));
        $comment->setContent('В самом общем случае потенциометрия отравляет свежеприготовленный раствор.');
        $comment->setArticle($this->getReference('article6'));        
        $comment->setAuthor($this->getReference('user6'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-02-29 13:10:54"));
        $comment->setContent('Брожение растворимо окисляет щелочной полисахарид.');
        $comment->setArticle($this->getReference('article7'));        
        $comment->setAuthor($this->getReference('user6'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-04-28 07:56:57"));
        $comment->setContent('Самосогласованная модель предсказывает, что при определенных условиях валентность индифферентно облучает азид ртути.');
        $comment->setArticle($this->getReference('article8'));        
        $comment->setAuthor($this->getReference('user6'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-08-10 11:31:51"));
        $comment->setContent('Пламя, как того требуют закон Гесса, ядовито заставляет окислитель по мере распространения использования фтористого этилена. ');
        $comment->setArticle($this->getReference('article9'));        
        $comment->setAuthor($this->getReference('user7'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-02-04 23:13:56"));
        $comment->setContent('Коагуляция, как бы это ни казалось симбиотичным, ядовито активирует электролиз до полного израсходования одного из реагирующих веществ.');
        $comment->setArticle($this->getReference('article10'));        
        $comment->setAuthor($this->getReference('user7'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-10-10 13:16:16"));
        $comment->setContent('Выпаривание захватывает белок. ');
        $comment->setArticle($this->getReference('article11'));        
        $comment->setAuthor($this->getReference('user7'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-01-20 07:03:16"));
        $comment->setContent('В самом общем случае потенциометрия вступает катализатор, как и предсказывает основной постулат квантовой химии. ');
        $comment->setArticle($this->getReference('article12'));        
        $comment->setAuthor($this->getReference('user8'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-04-30 16:30:58"));
        $comment->setContent('Поглощение, несмотря на внешние воздействия, распознает бензол. ');
        $comment->setArticle($this->getReference('article13'));        
        $comment->setAuthor($this->getReference('user8'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-09-14 21:01:14"));
        $comment->setContent('Коагуляция, как бы это ни казалось симбиотичным, ядовито активирует электролиз до полного израсходования одного из реагирующих веществ. ');
        $comment->setArticle($this->getReference('article14'));        
        $comment->setAuthor($this->getReference('user8'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-02-17 22:37:16"));
        $comment->setContent('Упаривание, даже при наличии сильных кислот, активирует свежеприготовленный раствор. ');
        $comment->setArticle($this->getReference('article15'));        
        $comment->setAuthor($this->getReference('user9'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-11-06 00:27:55"));
        $comment->setContent('Молекула разъедает окислитель, что получается при взаимодействии с нелетучими кислотными оксидами. ');
        $comment->setArticle($this->getReference('article11'));        
        $comment->setAuthor($this->getReference('user9'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-02-26 00:20:06"));
        $comment->setContent('При облучении инфракрасным лазером интермедиат испаряет азид ртути, и это неудивительно, если вспомнить синергетический характер явления. ');
        $comment->setArticle($this->getReference('article12'));        
        $comment->setAuthor($this->getReference('user10'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-09-20 00:01:51"));
        $comment->setContent('Комплексный фторид церия дегидрирован. Следует отметить, что комплекс рения с саленом вязок. Отсюда видно, что формула различна. ');
        $comment->setArticle($this->getReference('article13'));        
        $comment->setAuthor($this->getReference('user10'));        
        $manager->persist($comment);
		
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-07-23 02:00:49"));
        $comment->setContent('Упаривание окрашивает триплетный хлорсульфит натрия, поглощая их в количестве сотен и тысяч процентов от собственного исходного объема.');
        $comment->setArticle($this->getReference('article14'));        
        $comment->setAuthor($this->getReference('user10'));        
        $manager->persist($comment);
        
        $comment = new Comment();        $comment->setDateCreated(new \DateTime("2016-03-31 19:40:13"));
        $comment->setContent('Пигмент, несмотря на внешние воздействия, передает дейтерированный гидрогенит. ');
        $comment->setArticle($this->getReference('article15'));        
        $comment->setAuthor($this->getReference('user10'));        
        $manager->persist($comment);        
		
             
        $manager->flush();
    }
    
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 30;
    }
}
