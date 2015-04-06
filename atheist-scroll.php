<?php
/**
* Plugin Name: Daily Atheist Quote
* Plugin URI: 
* Description: Places a scrolling quote on atheism anywhere on your site - changes daily from a collection of over 150 quotes.
* Author: Jon Darby
* Author URI: http://theHeathensGuide.com
* Version: 1.0
*/


function atheist_scroll() {

	$quotes = array(

/* 1 */"[T]he biblical narrative is so thoroughly filled with inconsistencies and anachronisms...that it must be considered more of a historical novel than an accurate historical chronicle. ~Israel Finkelstein, Director of Archaeology - Tel Aviv University",

/* 2 */"The basis of irreligious criticism is: Man makes religion, religion does not make man.  In other words, religion is the self-consciousness and self-feeling of a man who has either not yet found himself or has already lost himself again. . .  Religion is the sigh of the oppressed creature, the heart of a heartless world, just as it is the spirit of a spiritless situation.  It is the opium of the people. ~Karl Marx",

/* 3 */"If religion becomes a cause of dislike, hatred, and division, it would be better to be without it, and to withdraw from such a religion would be a truly religious act. ~�Abdu�l-Bah�",

/* 4 */"It was the Christian tradition that produced atheism as its fruit; it led to the murder of God in the consciences of men because it presented them with an unbelievable god. ~P. Valadier, French writer",

/* 5 */"I am satisfied, and sufficiently occupied with the things which are, without tormenting or troubling myself about those which may indeed be, but of which I have no evidence. ~Thomas Jefferson",

/* 6 */"pride and indolence in the clergy; ignorance and servility in the laity; in both, superstition, bigotry, and persecution. ~James Madison on the fruits of Christianity",

/* 7 */"Lighthouses are more useful than churches. ~Benjamin Franklin",

/* 8 */"I almost shudder at the thought of alluding to the most fatal example of the abuses of grief which the history of mankind has preserved�the Cross... Consider what calamities that engine of grief has produced! ~John Adams",

/* 9 */"The government of the United States of America is not, in any sense, founded on the Christian religion ~The Treaty of Tripoli - signed by John Adams",

/* 10 */"No one knows or will ever know the truth about the gods, for even if you did stumble on the truth, you would not know you had. ~Xenophanes",

/* 11 */"Whoever praises him as a god of love does not have a high enough opinion of love itself. ~Friedrich Nietzsche",

/* 12 */"Collective fear stimulates herd instinct. . . Neither a man, nor a crowd, nor a nation can be trusted to act humanely or think sanely under the influence of a great fear. ~Bertrand Russell",

/* 13 */"A literal Bible presents me with far more problems than assets.  It offers me a god I cannot respect, much less worship. - Rev. John Shelby Spong, Bishop of Newark",

/* 14 */"The biblical stories should. . . be regarded as a national mythology with no more historical basis than the Homeric saga of Odysseus�s travels or Virgil�s saga of Aneas�s founding of Rome.... ~Israel Finkelstein, Director of Archaeology - Tel Aviv University",

/* 15 */"Evidence in the context of New Testament studies cannot �prove� anything, but it can suggest greater or lesser possibilities, greater or lesser plausibilities. ~Henry Lincoln, Holy Blood, Holy Grail",

/* 16 */"Is it not time that the Christian mythology, instead of being wiped out, was understood symbolically for once? ~Carl Jung",

/* 17 */"If Christ were here now, there is one thing he would not be�a Christian. ~Samuel Langhorne Clemens a.k.a. Mark Twain",

/* 18 */"What Jesus offered in return for loving one�s enemies was heaven on earth better known as peace of mind. ~BF Skinner, Walden Two",

/* 19 */"It is obvious to any unbiased reader that this story with its markedly religious coloration and its emphasis on supernatural �signs and wonders� is more of a romantic saga or popular legend than an accurate record.  Written down centuries later than the period which it describes, it is clearly more indebted to folklore than to sober fact. ~Theodore H. Gaster, Theologian",

/* 20 */"Were I to be the founder of a new sect, I would call them Apianarians, and, after the example of the bee, advise them to extract the honey from every sect. ~Thomas Jefferson",

/* 21 */"We are such an insignificant creature on a minor planet of a very average star in the outer suburbs of one of a hundred thousand million galaxies.  So it is difficult to believe in a god that would care about us or even notice our existence. ~Stephen Hawking",

/* 22 Feb */"With or without religion, you would have good people doing good things and evil people doing evil things.  But for good people to do evil things, that takes religion. ~Steven Weinberg, Nobel Prize winning physicist",

/* 23 */"All national institutions of churches, whether Jewish, Christian, or Turkish, appear to me no other than human inventions set up to terrify and enslave mankind and monopolize power and profit. ~Thomas Paine, The Age of Reason",

/* 24 */"Promising paradise or threatening hellfire is. . . generally admitted to be unproductive.  It is based on a fundamental fraud which, when discovered, turns the individual against society and nourishes the very thing it tries to stamp out. ~BF Skinner, Walden Two",

/* 25 */"Religion is for people who are afraid of going to hell; spirituality is for people, like me, who have already been there. ~Dave Mustaine",

/* 26 */"This is my way; what is your way?  The way does not exist. ~Friedrich Nietzsche",

/* 27 */"Skepticism is the highest of duties; blind faith the one unpardonable sin. ~Thomas Huxley (1907)",

/* 28 */"What can be asserted without proof can be dismissed without proof. ~Christopher Hitchens (2004)",

/* 29 */"Isn't it enough to see that a garden is beautiful without having to believe that there are fairies at the bottom of it too? ~Douglas Adams (1990)",

/* 30 */"As to the gods, I have no means of knowing either that they exist or do not exist. ~Protagoras (c. 450 BC, quoted in Plato�s 'Theatetus' c. 369 BC)",

/* 31 */"Religion is regarded by the common people as true, by the wise as false, and by the rulers as useful. ~Seneca the Younger 4 BCE.- 65 CE",

/* 32 */"You're basically killing each other to see who's got the better imaginary friend. ~Richard Jeni",

/* 33 */"Men never commit evil so fully and joyfully as when they do it for religious convictions.~Blaise Pascal",

/* 34 */"I contend that we are both atheists. I just believe in one fewer god than you do. When you understand why you dismiss all the other possible gods, you will understand why I dismiss yours. ~Stephen Roberts",

/* 35 */"And if there were a God, I think it very unlikely that He would have such an uneasy vanity as to be offended by those who doubt His existence. ~Bertrand Russell",

/* 36 */"The fact that a believer is happier than a skeptic is no more to the point than the fact that a drunken man is happier than a sober one. ~George Bernard Shaw",

/* 37 */"When I was a kid I used to pray every night for a new bicycle. Then I realized that the Lord does not work that way so I stole one and asked Him to forgive me. ~Emo Philips",

/* 38 */"Is God willing to prevent evil, but not able? Then he is not omnipotent. Is he able, but not willing? Then he is malevolent. Is he both able and willing? Then whence cometh evil? Is he neither able nor willing? Then why call him God? ~Epicurus",

/* 39 */"You can not convince a believer of anything; for their belief is not based on evidence, it is based on a deep-seated need to believe. ~Carl Sagan",

/* 40 */"We must question the story logic of having an all-knowing all-powerful God, who creates faulty Humans, and then blames them for his own mistakes. ~Gene Roddenberry",

/* 41 */"Properly read, the Bible is the most potent force for atheism ever conceived. ~ Asimov",

/* 42 */"There once was a time when all people believed in God and the church ruled. This time was called the Dark Ages. ~Richard Lederer",

/* 43 */"Do not pray in my school, and I will not think in your church. ~Unknown",

/* 44 */"Philosophy is questions that may never be answered. Religion is answers that may never be questioned. ~Unknown",

/* 45 */"Atheism is more than just the knowledge that gods do not exist, and that religion is either a mistake or a fraud. Atheism is an attitude, a frame of mind that looks at the world objectively, fearlessly, always trying to understand all things as a part of nature part of nature. ~Carl Sagan",

/* 46 */"Man created God in his image: intolerant, sexist, homophobic and violent. ~Marie",

/* 47 */"He that will not reason is a bigot; he that cannot reason is a fool; he that dares not reason is a slave. ~William Drummond",

/* 48 */"George Bush says he speaks to god every day, and christians love him for it. If George Bush said he spoke to god through his hair dryer, they would think he was mad. I fail to see how the addition of a hair dryer makes it any more absurd. ~Sam Harris",

/* 49 */"Faith: means not wanting to know what is true. ~Friedrich Nietzsche",

/* 50 */"The beauty of religious mania is that it has the power to explain everything. Once God (or Satan) is accepted as the first cause of everything which happens in the mortal world, nothing is left to chance...logic can be happily tossed out the window. ~Stephen King",

/* 51 */"I like your Christ, I do not like your Christians. Your Christians are so unlike your Christ. ~Mohandas K Gandhi",

/* 52 */"If people are good only because they fear punishment, and hope for reward, then we are a sorry lot indeed. ~Albert Einstein",

/* 53 */"God made me an atheist. Who are you to question his wisdom. ~Unknown",

/* 54 */"The inspiration of the bible depends on the ignorance of the person who reads it. ~Robert G. Ingersoll",

/* 55 */"Pick up the Bible and read it.  More atheists come from this exercise than any other single thing. ~Madalyn Murray O�Hair",

/* 56 */"Where the cross goes, there is never life more abundantly�only death, destruction, and ultimately betrayal. ~Vine Deloria, Jr.",

/* 57 */"Many have made a trade of delusions and false miracles, deceiving the stupid multitude. ~Leonardo DaVinci",

/* 58 */"Whenever we read the obscene stories, the voluptuous debaucheries, the cruel and torturous executions, the unrelenting vindictiveness with which more than half the Bible is filled, it would be more consistent that we call it the work of a demon than the word of God. ~Thomas Paine, The Age of Reason",

/* 59 */"God, too, has his hell; that is his love of man.  God is dead.  God died of his pity for man. ~Friedrich Nietzsche",

/* 60 */"If I go �Wow, what a great person you are.  How did that happen?�  �Well, I let Christ into my life.�  Then I get it.  But don�t tell me you let Christ into your life and assume I�m supposed to think you�re a great person. ~Lewis Black",

/* 61 */"Fear is the mother of all gods ... Nature does all things spontaneously, by herself, without the meddling of the gods. ~attr. Lucretius (c. 60 BC)",

/* 62 */"Entia non sunt multiplicanda praeter necessitatem (Entities should not be multiplied unnecessarily). ~William of Ockham (c. 1323)",

/* 63 */"The Church says that the Earth is flat, but I know that it is round. For I have seen the shadow of the Earth on the Moon and I have more faith in the shadow than in the Church. ~attr. Ferdinand Magellan",

/* 64 */"It is proof of a base and low mind for one to wish to think with the masses or majority, merely because the majority is the majority. Truth does not change because it is, or is not, believed by a majority of the people. ~Giordano Bruno (1582)",

/* 65 */"Atheism leads a man to sense, to philosophy, to natural piety, to laws, to reputation: all of which may be guides to an outward moral virtue. ~Sir Francis Bacon (c. 1625)",

/* 66 */"Superstition is more injurious to God than atheism. ~Denis Diderot (1746)",

/* 67 */"It is very important not to mistake hemlock for parsley; but not at all so to believe or not in God. ~attr. Denis Diderot (1749)",

/* 68 */"Atheism is the vice of a few intelligent people. ~Voltaire (1764)",

/* 69 */"What, indeed, is an atheist? He is one who destroys delusions which are harmful to humanity in order to lead men back to nature, to reality, to reason. He is a thinker who, having reflected on the nature of matter, its energy, properties and ways of acting, has no need of idealized powers or imaginary intelligences to explain the phenomena of the universe and the operations of nature. ~Baron d�Holbach (1770)",

/* 70 */"Religion has ever filled the mind of man with darkness, and kept him in ignorance of his real duties and true interests. It is only by dispelling the clouds and phantoms of Religion, that we shall discover Truth, Reason, and Morality. ~Baron d�Holbach (1770)",

/* 71 */"All children are born Atheists; they have no idea of God. ~Baron d�Holbach (1772)",

/* 72 */"Religious bondage shackles and debilitates the mind and unfits it for every noble enterprise. ~James Madison (1774)",

/* 73 */"Is God willing to prevent evil, but not able? Then he is not omnipotent. Is he able, but not willing? Then he is malevolent. Is he both able and willing? Then whence cometh evil? Is he neither able nor willing? Then why call him God? ~David Hume (1776, paraphrasing Epicurus c. 300 BC)",

/* 74 */"The various modes of worship, which prevailed in the Roman world, were all considered by the people, as equally true; by the philosopher, as equally false; and by the magistrate, as equally useful. ~Edward Gibbon (1776, possibly re-phrasing Lucretius� c. 60 BC or Seneca the Younger c. 50 AD)",

/* 75 */"Question with boldness even the existence of a God; because, if there be one, He must more approve of the homage of Reason than that of blindfolded Fear. ~Thomas Jefferson (1787)",

/* 76 */"It is always better to have no ideas than false ones; to believe nothing, than to believe what is wrong. ~Thomas Jefferson (1788)",

/* 77 */"I do not believe in the creed professed by the Jewish Church, by the Roman Church, by the Greek Church, by the Turkish Church, by the Protestant Church, nor by any Church that I know of. My own mind is my own Church. ~Thomas Paine (1794)",

/* 78 */"The most detestable wickedness, the most horrid cruelties, and the greatest miseries, that have afflicted the human race have had their origin in this thing called revelation, or revealed religion. ~Thomas Paine (1795)",

/* 79 */"Religion is excellent stuff for keeping common people quiet. ~attr. Napoleon Bonaparte",

/* 80 */"I do not believe in any revealed religion. I will have nothing to do with your immortality; we are miserable enough in this life, without the absurdity of speculating upon another. ~Lord Byron (1811)
	The first requisite for the happiness of the people is the abolition of religion. ~Karl Marx (1844)",

/* 81 */"I cannot persuade myself that a beneficent and omnipotent God would have designedly created the Ichneumonidae with the express intention of their feeding within the living bodies of caterpillars, or that a cat should play with mice. ~Charles Darwin (1860)",

/* 82 */"If there is a God, atheism must seem to Him as less of an insult than religion. ~Edmond de Goncourt (1868)",

/* 83 */"All religion is slavery. ~Robert G. Ingersoll (1870)",

/* 84 */"Take from the church the miraculous, the supernatural, the incomprehensible, the unreasonable, the impossible, the unknowable, the absurd, and nothing but a vacuum remains. ~Robert G. Ingersoll (1877)",

/* 85 */"The world would be astonished if it knew how great a proportion of its brightest ornaments, of those most distinguished even in popular estimation for wisdom and virtue, are complete skeptics in religion. ~John Stuart Mill (1873)",

/* 86 */"God is dead. God remains dead. And we have killed him. ~Friedrich Nietzsche (1882)",

/* 87 */"Which is it, is man one of God's blunders or is God one of man's? ~Friedrich Nietzsche (1889)",

/* 88 */"It is wrong for a man to say that he is certain of the objective truth of any proposition unless he can produce evidence which logically justifies that certainty. This is what Agnosticism asserts; and, in my opinion, it is all that is essential to Agnosticism. ~Thomas Huxley (1889)",

/* 89 */"The gods offer no rewards for intellect. There was never one yet that showed any interest in it. ~Mark Twain (1900)",

/* 90 */"If forty million people say a foolish thing it does not become a wise one. ~W. Somerset Maugham (1901)",

/* 91 */"I have never seen the slightest scientific proof of the religious ideas of heaven and hell, of future life for individuals, or of a personal God. ~Thomas Edison (1911)",

/* 92 */"So far as religion of the day is concerned, it is a damned fake...Religion is all bunk. ~attr. Thomas Edison",

/* 93 */"All the sweetness of religion is conveyed to the world by the hands of storytellers and image-makers. Without their fictions the truths of religion would for the multitude be neither intelligible nor even apprehensible; and the prophets would prophesy and the teachers teach in vain. ~George Bernard Shaw (1921)",

/* 94 */"My atheism, like that of Spinoza, is true piety towards the universe and denies only gods fashioned by men in their own image to be servants of their human interests. ~George Santayana (1922)",

/* 95 */"Religion is fundamentally opposed to everything I hold in veneration - courage, clear thinking, honesty, fairness, and, above all, love of the truth. ~H. L. Mencken (1925)",

/* 96 */"Morality is doing what is right, no matter what you are told. Religion is doing what you are told, no matter what is right. ~attr. H. L. Mencken (c.1925)",

/* 97 */"All thinking men are atheists. ~Ernest Hemingway (1929)",

/* 98 */"Religion is based, I think, primarily and mainly upon fear. ~Bertrand Russell (1927)",

/* 99 */"The fact that an opinion has been widely held is no evidence whatever that it is not utterly absurd; indeed, in view of the silliness of the majority of mankind, a widespread belief is more likely to be foolish than sensible. ~Bertrand Russell (1929)",

/* 100 */"Religion prevents our children from having a rational education; religion prevents us from removing the fundamental causes of war; religion prevents us from teaching the ethic of scientific cooperation in place of the old fierce doctrines of sin and punishment. It is possible that mankind is on the threshold of a golden age; but, if so, it will be necessary first to slay the dragon that guards the door, and this dragon is religion. ~Bertrand Russell (1930)",

/* 101 */"Belief in a Divine mission is one of the many forms of certainty that have afflicted the human race. Most of the greatest evils that man has inflicted upon man have come through people feeling quite certain about something which, in fact, was false. ~Bertrand Russell (1950)",

/* 102 */"I am as firmly convinced that religions do harm as I am that they are untrue. ~Bertrand Russell (1957)",

/* 103 */"Religion is an illusion and it derives its strength from the fact that it falls in with our instinctual desires. ~Sigmund Freud (1932)",

/* 104 */"When a man is freed of religion, he has a better chance to live a normal and wholesome life. ~attr. Sigmund Freud (c. 1930)",

/* 105 */"I don't believe in God because I don't believe in Mother Goose. ~Clarence Darrow (1930)",

/* 106 */"I wondered a little why God was such a useless thing. It seemed a waste of time to have him. After that he became less and less, until he was�nothingness. ~Frances Farmer (1931)",

/* 107 */"A man�s ethical behaviour should be based effectually on sympathy, education and social ties and needs; no religious basis is necessary. Man would indeed be in a poor way if he had to be restrained by fear of punishment and hope of reward after death. ~Albert Einstein (1930)",

/* 108 */"It was, of course, a lie what you read about my religious convictions, a lie which is being systematically repeated. I do not believe in a personal God and I have never denied this but have expressed it clearly. If something is in me which can be called religious then it is the unbounded admiration for the structure of the world so far as our science can reveal it. ~Albert Einstein (1954)",

/* 109 */"I do not believe in immortality of the individual, and I consider ethics to be an exclusively human concern with no superhuman authority behind it. ~Albert Einstein (1954)",

/* 110 */"My practise as a scientist is atheistic. That is to say, when I set up an experiment I assume that no god, angel, or devil is going to interfere with its course; and this assumption has been justified by such success as I have achieved in my professional career. I should therefore be intellectually dishonest if I were not also atheistic in the affairs of the world. And I should be a coward if I did not state my theoretical views in public. ~J. B. S. Haldane (1934)",

/* 111 */"When we blindly adopt a religion, a political system, a literary dogma, we become automatons. We cease to grow. ~Ana�s Nin (c. 1947)",

/* 112 */"There is no 'God of the gaps' to take over at those strategic places where science fails; and the reason is that gaps of this sort have the unpreventable habit of shrinking. ~Charles Coulson (1955)",

/* 113 */"I wouldn't say that religion has promoted the social progress of mankind. I say that it has been a detriment to the progress of civilization, and I would also say this: that the emancipation of the mind from religious superstition is as essential to the progress of civilization as is emancipation from physical slavery. ~Culbert Olson (1961)",

/* 114 */"All your Western theologies, the whole mythology of them, are based on the concept of God as a senile delinquent. ~Tennessee Williams (1961)",

/* 115 */"Atheism may be defined as the mental attitude which unreservedly accepts the supremacy of reason and aims at establishing a lifestyle and ethical outlook verifiable by experience and the scientific method, independent of all arbitrary assumptions of authority and creeds. ~Madalyn Murray O'Hair (1963)",

/* 116 */"An Atheist believes that a hospital should be built instead of a church. An Atheist believes that deed must be done instead of a prayer said. An Atheist strives for involvement in life and not escape into death. ~Madalyn Murray O'Hair (1963)",

/* 117 */"Atheism is a very positive affirmation of man's ability to think for himself, to do for himself, to find answers to his own problems. ~Madalyn Murray O'Hair (1965)",

/* 118 */"When one person suffers from a delusion, it is called insanity. When many people suffer from a delusion it is called Religion. ~Robert M. Pirsig (1974)",

/* 119 */"Atheism is merely the bed-rock of sanity in a world of madness. ~Emmett F. Fields (1980)",

/* 120 */"Since it is obviously inconceivable that all religions can be right, the most reasonable conclusion is that they are all wrong. ~Christopher Hitchens (1982)",

/* 121 */"To surrender to ignorance and call it God has always been premature, and it remains premature today. ~ Asimov (1983)",

/* 122 */"If I were not an atheist, I would believe in a God who would choose to save people on the basis of the totality of their lives and not the pattern of their words. ~ Asimov (1994)",

/* 123 */"Extraordinary claims require extraordinary evidence. ~Carl Sagan (1980) (paraphrasing Marcelo Truzzi, Pierre-Simon Laplace and David Hume)",

/* 124 */"You can't convince a believer of anything; for their belief is not based on evidence, it's based on a deep-seated need to believe. ~Carl Sagan (1985)",

/* 125 */"Atheism is more than just the knowledge that gods do not exist, and that religion is either a mistake or a fraud. Atheism is an attitude, a frame of mind that looks at the world objectively, fearlessly, always trying to understand all things as a part of nature. ~attr. Carl Sagan (c. 1985)",

/* 126 */"The theist can only find meaning by leaving this life for a transcendental world beyond the grave. The human world as he finds it is empty of �ultimate purpose� and hence meaningless. Theism thus is an attempt to escape from the human condition; it is a pathetic deceit. ~Paul Kurtz (1988)",

/* 127 */"�There are no atheists in foxholes� isn't an argument against atheism, it's an argument against foxholes. ~James Morrow (1994)",

/* 128 */"I contend we are both atheists. I just believe in one fewer god than you do. When you understand why you dismiss all the other possible gods, you will understand why I dismiss yours. ~Stephen Roberts (1995)",

/* 129 */"We cannot prove that there is no God, but we can safely conclude the He is very, very improbable indeed. ~Richard Dawkins (1991)",

/* 130 */"Faith is the great cop-out, the great excuse to evade the need to think and evaluate evidence. Faith is belief in spite of, even perhaps because of, the lack of evidence. ~Richard Dawkins (1992)",

/* 131 */"There may be fairies at the bottom of the garden. There is no evidence for it, but you can�t prove that there aren�t any, so shouldn�t we be agnostic with respect to fairies? ~Richard Dawkins (1994)",

/* 132 */"The universe that we observe has precisely the properties we should expect if there is, at bottom, no design, no purpose, no evil, no good, nothing but pitiless indifference. ~Richard Dawkins (1995)",

/* 133 */"What worries me about religion is that it teaches people to be satisfied with not understanding. ~Richard Dawkins (1996)",

/* 134 */"We who are atheists are also a-fairyists, a-teapotists, and a-unicornists, but we don't have to bother saying so. ~Richard Dawkins (2002)",

/* 135 */"The God of the Old Testament is arguably the most unpleasant character in all of fiction: jealous and proud of it; a petty, unjust, unforgiving control-freak; a vindictive, bloodthirsty ethnic cleanser; a misogynistic, homophobic, racist, infanticidal, genocidal, filicidal, pestilential, megalomaniacal, sadomasochistic, capriciously malevolent bully. ~Richard Dawkins (2006)",

/* 136 */"Religion is an insult to human dignity. With or without it, you would have good people doing good things and evil people doing evil things. But for good people to do evil things, that takes religion. ~Steven Weinberg (1999)",

/* 137 */"Religious belief is not a precondition either of ethical conduct or of happiness. ~14th Dalai Lama (1999)",

/* 138 */"Most people in the West who say they believe in God actually believe in belief in God. ~Daniel Dennett (2004)",

/* 139 */"There�s probably no God. So stop worrying and enjoy your life. ~Ariane Sherine, Atheist Bus Campaign (2008)",

/* 140 */"Faith means making a virtue out of not thinking. It's nothing to brag about...Religion is dangerous because it allows human beings, who don't have all the answers, to think that they do. ~Bill Maher (2008)",

/* 141 */"Because there is a law such as gravity, the Universe can and will create itself from nothing. Spontaneous creation is the reason there is something rather than nothing, why the Universe exists, why we exist. It is not necessary to invoke God to light the blue touch paper and set the Universe going. ~Stephen Hawking (2010)",

/* 142 */"The easy coincidence with which I know another man's religion is folly teaches me to suspect that my own is also. ~Mark Twain",

/* 143 */"The Fundamentalists have long been spreading myths and misconceptions and denying the
self-evident facts about the fossil record. But they have no published research on fossils in
peer-reviewed scientific journals, so they are no more qualified to write about fossils than they arequalified to write about auto mechanics or music theory. ~Donald Prothero",

/* 144 */"It annoys me that the burden of proof is on us. It should be: 'You came up with the idea. Why do you believe it?' I could tell you I've got superpowers. But I can't go up to people saying, 'Prove I can't fly.' They'd go: 'What do you mean \"Prove you can't fly?\" Prove you can!' ~Ricky Gervais",

/* 145 */"There is simply nothing we can do about the rise of atheism but accept the inevitable and hope they do not treat Christians the way Christians treated them. ~Anonymous Youth Pastor",

/* 146 */"What exactly do Christians think they are saving me <em>from</em>? A life filled with free inquiry into life's greatest questions? The thought of not having all the answers to these questions? The ability to draw my own conclusions after weighing the evidence? �I am far from 'lost.' True, I may not have all the answers, but that's why I appreciate the chance to observe the world around me and search for the answers myself. ~Hemant Mehta",

/* 147 */"Faith based on science will quickly turn to non faith when the science becomes better
understood. ~Victor Stenger",

/* 148 */"If salvation is the cure, then atheism is the prevention. ~Dan Barker",

/* 149 */"Science should be taught not in order to support religion and not in order to destroy religion. Science should be taught simply ignoring religion. ~Steven Weinberg",

/* 150 */"If you are a person of the same sort as myself, I should be glad to continue questioning you: If not, I can let it drop. Of what sort am I? One of those who would be glad to be refuted if I say anything untrue, and glad to refute anyone else who might speak untruly; but just as glad, mind you, to be refuted as to refute, since I regard the former as the greater benefit. ~Socrates",

/* 151 */"Never pass up a chance to have a conversation because the next mind you change could change thousands. ~David Smalley",

);
	$v = date(z);
	$n = count($quotes);
	while ($v >= $n) {
		$v = ($v-$n);
	}

	echo'<marquee behavior="scroll" direction="left" style="font-weight:bold;">' . $quotes[$v] . '</marquee>';
}

add_shortcode( 'atheist_scroll', 'atheist_scroll' );