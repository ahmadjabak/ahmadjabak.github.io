<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pages;
use App\Models\Roles;
use App\Models\Fors;
use App\Models\Types;
use App\Models\Media;
use App\Models\Blogs;
use App\Models\Events;
use App\Models\Admins;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

Roles::create ([
    'RoName'=>'admin'
]);

Roles::create ([
    'RoName'=>'superadmin'
]);

Admins::create ([
     
    'AdEmail' => 'amir@gmail.com',
    'AdPassword' => Hash::make('12345678'),
    'RoId' => '1',

    'AdFname'=>'amir',
    'AdMname'=>'jamil',
    'AdLname'=>'zeineddine',
    'AdImage'=>'zeineddine',
    'AdPhone'=>'76080630',
   
    'AdEnabled'=>'active',
    
    
    
])
;




Pages::create([
    'PaName'=>'home'
]);

Pages::create([
    'PaName'=>'aboutus'
]);

Pages::create([
    'PaName'=>'blog'
]);

Pages::create([
    'PaName'=>'event'
]);

Types::create([
    'TyName'=>'image'
]);
Types::create([
    'TyName'=>'video'
]);
Types::create([
    'TyName'=>'text'
]);
Types::create([
    'TyName'=>'link'
]);
Types::create([
    'TyName'=>'title'
]);
Fors::create([
    'ForName'=>'homea'
]);


Fors::create([
    'ForName'=>'homeb'
]);

Fors::create([
    'ForName'=>'homec'
]);

Fors::create([
    'ForName'=>'homed'
]);
Roles::create([
    'RoName'=>'superadmin'
]);
Roles::create([
    'RoName'=>'admin'
]);
Admins::create([
    'RoId'=>2,
    'AdFname'=>'Ghalia',
    'AdMname'=>'Samir',
    'AdLname'=>'Awik',
    'AdImage'=>'assignment-writing.jpg',
    'AdPhone'=>'67484640',
    'AdEmail'=>'ghalia@gmail.com',
   
    'AdPassword'=> Hash::make('12345678'),
    'AdEnabled'=>'active'
 ]);
 Admins::create([
    'RoId'=>1,
    'AdFname'=>'Ahmad',
    'AdMname'=>'Mohammad',
    'AdLname'=>'Jabak',
    'AdImage'=>'assignment-writing.jpg',
    'AdPhone'=>'67484640',
    'AdEmail'=>'ahmadjabak5@gmail.com',
    
    'AdPassword'=>Hash::make('12345678'),
    'AdEnabled'=>'active'
 ]);
Media::create([
    'TyId'=>'3',
    'PaId'=>'1',
    'FoId'=>'1',
    'Mecontent'=>'A+ Student Mentality! Stay motivated, stay disciplined, be self-aware and keep learning every single day! This is a new motivational video created to motivate students and young people to study for their exams and work hard for their dreams! Hope it inspires you and gets you motivated!'

]);
Media::create([
    'TyId'=>'1',
    'PaId'=>'1',
    'FoId'=>'1',
    'Mecontent'=>'assignment-writing.jpg'

]);


Media::create([
    'TyId'=>'3',
    'PaId'=>'2',

    'Mecontent'=>'Wake up with determination. Go to bed with satisfaction.'

]);
Media::create([
    'TyId'=>'3',
    'PaId'=>'2',

    'Mecontent'=>'Our mission is to inspire, educate and help students of all ages with both lack of motivation and mental health awareness. We work with motivational speakers to create life-changing motivational videos to help us achieve this goal.

    '

]);

Media::create([
    'TyId'=>'1',
    'PaId'=>'2',

    'Mecontent'=>'assignment-writing.jpg'

]);

Media::create([
    'TyId'=>'1',
    'PaId'=>'2',

    'Mecontent'=>'assignment-writing.jpg'

]);

Media::create([
    'TyId'=>'2',
    'PaId'=>'2',
    'FoId'=>'2',
    'Mecontent'=>'https://www.youtube.com/embed/oAbyfbZsRxg?autoplay=1&mute=1'

]);




Media::create([
    'TyId'=>'1',
    'PaId'=>'1',
    'FoId'=>'1',
    'Mecontent'=>'content-guidelines-62b4543f9d1bc-sej-1280x720.png'

]);
Media::create([
    'TyId'=>'1',
    'PaId'=>'1',
    'FoId'=>'1',
    'Mecontent'=>'study.jpg'

]);

Media::create([
    'TyId'=>'2',
    'PaId'=>'1',
    'FoId'=>'2',
    'Mecontent'=>'https://www.youtube.com/embed/vQzb34h7mtY'

]);
Media::create([
    'TyId'=>'2',
    'PaId'=>'1',
    'FoId'=>'2',
    'Mecontent'=>'https://www.youtube.com/embed/wnHW6o8WMas'

]);
Media::create([
    'TyId'=>'2',
    'PaId'=>'1',
    'FoId'=>'2',
    'Mecontent'=>'https://www.youtube.com/embed/oAbyfbZsRxg'

]);

Media::create([
    'TyId'=>'3',
    'PaId'=>'1',
    'FoId'=>'2',
    'Mecontent'=>'Stay disciplined, work hard, always believe in your dreams and go after them! These motivational videos are created to inspire and help students to study for exams, work hard, and fight feelings of depression and anxiety.'

]);
Media::create([
    'TyId'=>'3',
    'PaId'=>'1',
    'FoId'=>'2',
    'Mecontent'=>'HARD WORK PAYS OFF! Keep reading, keep studying, keep taking care of yourself. Soon all of your hard work will pay off! This is a new motivational video created to motivate students and young people to work hard from home for their dreams!! Hope it inspires you and gets you motivated!'

]);
Media::create([
    'TyId'=>'3',
    'PaId'=>'1',
    'FoId'=>'2',
    'Mecontent'=>'Study Hard! No matter if it seems impossible, no matter how difficult, believe me, it s going to be worth it. These motivational videos are created to motivate students to study for exams, work hard, and fight feelings of depression and anxiety.'

]);
Media::create([
    'TyId'=>'5',
    'PaId'=>'1',
    'FoId'=>'2',
    'Mecontent'=>'WORK FOR YOUR DREAMS'

]);
Media::create([
    'TyId'=>'5',
    'PaId'=>'1',
    'FoId'=>'2',
    'Mecontent'=>'WINNERS NEVER QUIT'

]);

Media::create([
    'TyId'=>'5',
    'PaId'=>'1',
    'FoId'=>'2',
    'Mecontent'=>'NO EXCUSES'

]);

Media::create([
    'TyId'=>'3',
    'PaId'=>'1',
    'FoId'=>'3',
    'Mecontent'=>'Career tests are evaluations used to determine job strengths or ideal career roles for potential candidates. Individuals take these tests for self-analysis, while human resources professionals and managers occasionally use these quizzes to choose applicants and assemble teams.'

]);

Media::create([
    'TyId'=>'4',
    'PaId'=>'1',
    'FoId'=>'3',
    'Mecontent'=>'teambuilding.com/blog/career-tests'

]);

Media::create([
    'TyId'=>'4',
    'PaId'=>'1',
    'FoId'=>'4',
    'Mecontent'=>'https://www.facebook.com/ghalia.awick'


]);
Media::create([
    'TyId'=>'4',
    'PaId'=>'1',
    'FoId'=>'4',
    'Mecontent'=>'https://www.linkedin.com/in/ghalia-al-awik-22575118a/'

]);
Media::create([
    'TyId'=>'4',
    'PaId'=>'1',
    'FoId'=>'4',
    'Mecontent'=>'https://www.instagram.com/ghalia_awick/'

]);
Media::create([
    'TyId'=>'4',
    'PaId'=>'1',
    'FoId'=>'4',
    'Mecontent'=>'ahmadjabak5@gmail.com'

]);



Blogs::create([
    'BloImage'=>'study.jpg',
    'BloVideo'=>'https://www.youtube.com/embed/oAbyfbZsRxg?autoplay=1&mute=1',
    'BloTitle'=>'5 Tips on How to Study in College and Get Good Grades',
    'BloDescription'=>'College is a big thing for many students and parents. It can make or break your future, so it’s essential to take it seriously! And just like in middle and high school, studying is still key to success in college.

    It would be nice to skip the “study” part and still get good grades, but it just doesn’t work. We can only learn if we take the time to study. And if we want good grades, we must put in the effort!

    Here are five tips on how to study in college and get good grades:

    Attend All Classes
    There were days when I woke up feeling like I just wanted to stay in bed all day. Sleeping is tempting for most of us, especially when all you have to do is go to class! But I learned about college that skipping class doesn’t pay off.

    Skipping classes means you’ll miss out on lectures. And if you miss lectures, you’ll miss out on learning the material. And if you miss out on learning the material, you won’t do well on exams. It’s a vicious cycle! So, my first tip on how to study in college is to attend all your classes.

    Professors will see your eagerness to learn and be more willing to help. Moreover, class attendance also counts toward your grade in most courses, so it’s even more critical always to show up and attend your classes regularly.

    I know it’s not always easy, but it’ll be worth it. Always think about the long-term benefits. A day in a class can do so much for your grades, so get up and look forward to learning!

    Take Notes
    Attending classes is one thing; listening and learning are another. A lot of times, students attend classes, but they don’t listen. When the time comes to study for exams, they realize they don’t know anything. It happens, but it’s best to avoid it if we can. My second tip is to attend your classes with purpose.

    One way to ensure you’re listening in class and learning the material is to take notes. Focus on the lecture and take notes when you’re in class. It’s okay to miss a few things but try to get the main points down. The benefits of taking notes in class include the following:

    You can go back and review your notes before exams.
    Your notes can act as a supplement to your textbook reading.
    You can share your notes with other students.
    Taking notes also pushes you to pay attention in class. It will also help you remember what you learned in class. Notes will make studying a lot easier!

    Develop a Routine
    How to Study in College
    When I first got to college, I had no idea how to study. I would sit down at my desk and stare at my books. I had no clue where to start or what to do. But after a while, I realized the need to develop a routine that worked for me. And it made studying a lot easier!

    Everyone’s different, so find a personal routine that works for you. Some people like to study in the morning, and some prefer to study at night. Some people study in short bursts and some study for long periods. Find what works for you and stick to it! Having a routine will make studying a lot less daunting.

    Have a time chart or schedule for when you will study which subjects. This will help you be more efficient with your time and better use your study sessions. Consider your priorities, deadlines, and daily schedule when making your study plan. Try to switch up your routine every once in a while to keep things fresh. But for the most part, stick to what works!

    Create a Study Space
    Another tip on how to study in college is to create a study space. This is a place where you can go to focus on your studies. It can be anywhere! For me, it was usually a corner in my bedroom or the library. Find a place where you feel comfortable and won’t be distracted.

    Once you have a study space, make sure it’s well-equipped. This means having everything you need to study, like books, notebooks, and pens. It also means making sure your space is pleasant. You don’t want to be studying in a cramped and cluttered space. Organize your study space and make it a place you want to be.

    It’s essential to see your space as a place for productivity. Please don’t make it a corner that you dread to go to. Make it a place you look forward to spending time in!

    This can also work when studying with friends. I found a study space together with my friends and kept all our stuff there. This way, we had everything we needed and could help each other out. It was a win-win!

    You could also include anything that helps you focus, like music or a snack. The ultimate goal is a dedicated study space where nothing else matters but learning. This space should be a part of your daily routine, too.

    Take Breaks
    Last but not least, take breaks! Don’t try to study for hours on end. It’s not sustainable, and it’s not healthy. Our brains need time to rest, so make sure you’re taking breaks.

    I preferred to study for 50 minutes and then take a 10-minute break. I would get up, move around during my break, or grab a snack. I also took a few deep breaths to relax. This break helped me clear my head and prepare for the next 50 minutes of studying.

    It’s also important to remember that while college is all about preparing for the future, it’s also a time to enjoy yourself. Hang out with friends, join clubs, and explore your interests. College is a time to grow as a person, so make the most of it.

    Make sure you’re taking breaks to do things you enjoy. Breaks must be purposeful, too. Don’t just scroll through social media or watch TV. Do something that will help you relax and recharge. Take a walk, listen to music, or take a power nap. This will help you stay motivated and focused on your studies. You’ll also have something to look forward to after studying.

    Just make sure your break doesn’t turn into an all-day affair!

    How to Study in College
    Ace Your College Classes!
    These are just a few tips for college and getting good grades. College is a big adjustment, but it’s also an enriching experience. Think about how your grades will affect your future and put in the work now. Your first step toward your dream job, dream graduate school, or dream career starts with college. But don’t forget about personal growth, too!

    Meet new friends, explore new hobbies, and discover who you are. College is crucial, but it’s much more than getting good grades. Balance your studies with your personal life, and you’ll do great.

    Start by remembering the importance of your classes, and then show up with a purpose. Develop a study routine that works for you so you don’t burn out. Create a dedicated study space and make sure it has everything you need. And finally, take breaks! Don’t forget to live a little and enjoy your college experience. You’ll be so glad you did! And if you need a little help, plenty of resources are available.

    These tips will help you get good grades and have a blast while doing it. Follow these, and you’ll be on your way to academic success. Good luck, college student!

    FAQs
    What’s the best way to study in college?
    The best way to study in college is to attend the lectures regularly, take notes, revise the lectures daily, start planning for exam preparation in advance, and make a well-organized study space to focus on whatever you are reading or practicing entirely.

    How can college students study?
    Most college students make the severe mistake of missing their lectures and not attending classes regularly. All college students should avoid this and attend the lectures daily to ensure they do not miss any essential concepts.

    Moreover, taking notes in every lecture is of utmost importance when it comes to making sure that you are grasping the concepts and can quickly revise them before a test or exam.

    How can I study smart in college?
    Some of the most important tips to study smart in college are:

    Organize your notes visually.
    Start preparation and planning for the exams early.
    Rely on friends and conduct a particular study session in a group.
    Revise the concepts daily to grasp them and memorize them for an extended period.
    Stay positive and minimize distractions from your life, so you have more energy to focus on your studies.
    Sources:
    https://www.umassd.edu/dss/resources/students/classroom-strategies/how-to-get-good-grades/
    https://post.edu/blog/six-proven-successful-study-tips-for-college-students/
    https://www.uopeople.edu/blog/how-to-get-good-grades-in-college/
    https://www.livecareer.com/resources/careers/recent-grads/getting-better-grades
    https://hbculifestyle.com/improve-your-grades-in-college/
    https://www.goingmerry.com/blog/study-tips-for-college/
    https://usm.maine.edu/agile/attending-class-purpose#WhatIfIMissClass
    https://www.excelsior.edu/article/study-plans/#:~:text=A%20study%20plan%20is%20a,responsibilities%20to%20do%20your%20schoolwork.
    https://health.cornell.edu/about/news/study-breaks-stress-busters#:~:text=Research%20shows%20that%20taking%20purposeful,productivity%2C%20and%20ability%20to%20focus.
    https://www.umassd.edu/dss/resources/students/classroom-strategies/why-take-notes/#:~:text=Note%20taking%20forces%20you%20to,and%20remember%20the%20information%20later.
    https://usm.maine.edu/agile/attending-class-purpose#WhyIsAttendanceEvenImportant
    https://usm.maine.edu/agile/attending-class-purpose#WhatDoesItMeantoAttendClasswithPurpo

    Share
    Tweet
    Pin
    ',
    'BloEnabled'=>'true'




]);


Blogs::create([
    'BloImage'=>'assignment-writing.jpg',
    'BloVideo'=>'https://www.youtube.com/embed/oAbyfbZsRxg?autoplay=1&mute=1',
    'BloTitle'=>'Planning to Study: Test-Taking Tips for Students',
    'BloDescription'=>'For a student to ace an exam, they need to be completely prepared for it. And no, there’s no better alternative to preparation — studying throughout the course and preparing over time prevents stress from getting the best of the student at the worst possible moment. If students don’t give themselves as much time as possible to study for a test, they might get a disappointing grade or even fail their course.

    However, it’s understandable why so many students put off studying as long as possible. Procrastination is a common issue not only among students but also among adults in their professional lives. Preparing for a test, especially a big one feels overwhelmingly difficult sometimes.

    It is important to note that when students plan out their test-taking strategies ahead of time instead of scrambling for ways to memorize information at the last minute, they can greatly reduce their stress and increase their chances of success.

    I’ve gathered a list of test-taking tips for students planning to study this term. With these studying methods under their toolbelt, any student will feel more prepared for the gauntlet of exams ahead of them.

    Studying Tips for Improving Retention and Reducing Stress
    Create a Study Schedule and Stick to It
    Creating a study schedule allows students to maintain focus and manage their time well, especially for those who find it difficult to study regularly. When creating a study schedule, the student should keep their schoolwork and extracurriculars in mind. By being thoughtful about their schedule, they can choose times where they can relax, focus, and, most of all, study.

    It might be difficult to stick to a study schedule at first, but it’s something that every student should work on. It eventually becomes part of their routine when they practice sticking to their study schedule. Over time, they’ll get used to having dedicated time for studying, which makes it easier for them to focus and digest the information properly.

    This also comes with the added benefit of reduced stress outside study hours. Many students feel guilty when relaxing if they know they should study more often. However, when students delegate specific times of their day to study, they can rest easy during the rest of the day, knowing that they’re doing what they can when they can.

    Limit Time Spent Studying
    While regular studying is essential, it shouldn’t be overdone. Overstudying can be counterproductive and prevent students from getting the results they hoped for when the test rolls around.

    The thing is, after an hour or two, it becomes more difficult to concentrate. Even if a student continues reading past this point, there’s a good chance that the information won’t stick in their minds.

    The best way to study is to schedule several study sessions. This may seem more exhausting and complicated at first, but it allows students to retain the information they’re studying, making the actual tests less stressful.

    Cut out Distractions
    When planning to study, it’s important to take note of the things to do, but the things that students should be avoiding are just as important. Many things can distract a student, making it incredibly difficult for them to focus. This prevents them from maximizing their scheduled study sessions. While regular breaks from studying are necessary, those breaks must be scheduled and timed. For example, a student can take five-minute breaks every 30 minutes.

    Distractions can be even more detrimental when studying a subject the student does not enjoy. This tempts them to take unnecessary “quick breaks,” preventing them from making the most of their scheduled study sessions.

    For a student to remain focused, they should cut out all possible distractions that might lure their attention away from studying. One way to do this is by avoiding using smartphones or other electronics. If they’re necessary for research purposes, turn off all notifications and avoid visiting websites that are not essential to the study session.',
    'BloEnabled'=>'true'




]);

Blogs::create([
    'BloImage'=>'assignment-writing.jpg',
    'BloVideo'=>'https://www.youtube.com/embed/oAbyfbZsRxg?autoplay=1&mute=1',
    'BloTitle'=>'Study: Test-Taking Tips for Students',
    'BloDescription'=>'For a student to ace an exam, they need to be completely prepared for it. And no, there’s no better alternative to preparation — studying throughout the course and preparing over time prevents stress from getting the best of the student at the worst possible moment. If students don’t give themselves as much time as possible to study for a test, they might get a disappointing grade or even fail their course.

    However, it’s understandable why so many students put off studying as long as possible. Procrastination is a common issue not only among students but also among adults in their professional lives. Preparing for a test, especially a big one feels overwhelmingly difficult sometimes.

    It is important to note that when students plan out their test-taking strategies ahead of time instead of scrambling for ways to memorize information at the last minute, they can greatly reduce their stress and increase their chances of success.

    I’ve gathered a list of test-taking tips for students planning to study this term. With these studying methods under their toolbelt, any student will feel more prepared for the gauntlet of exams ahead of them.

    Studying Tips for Improving Retention and Reducing Stress
    Create a Study Schedule and Stick to It
    Creating a study schedule allows students to maintain focus and manage their time well, especially for those who find it difficult to study regularly. When creating a study schedule, the student should keep their schoolwork and extracurriculars in mind. By being thoughtful about their schedule, they can choose times where they can relax, focus, and, most of all, study.

    It might be difficult to stick to a study schedule at first, but it’s something that every student should work on. It eventually becomes part of their routine when they practice sticking to their study schedule. Over time, they’ll get used to having dedicated time for studying, which makes it easier for them to focus and digest the information properly.

    This also comes with the added benefit of reduced stress outside study hours. Many students feel guilty when relaxing if they know they should study more often. However, when students delegate specific times of their day to study, they can rest easy during the rest of the day, knowing that they’re doing what they can when they can.

    Limit Time Spent Studying
    While regular studying is essential, it shouldn’t be overdone. Overstudying can be counterproductive and prevent students from getting the results they hoped for when the test rolls around.

    The thing is, after an hour or two, it becomes more difficult to concentrate. Even if a student continues reading past this point, there’s a good chance that the information won’t stick in their minds.

    The best way to study is to schedule several study sessions. This may seem more exhausting and complicated at first, but it allows students to retain the information they’re studying, making the actual tests less stressful.

    Cut out Distractions
    When planning to study, it’s important to take note of the things to do, but the things that students should be avoiding are just as important. Many things can distract a student, making it incredibly difficult for them to focus. This prevents them from maximizing their scheduled study sessions. While regular breaks from studying are necessary, those breaks must be scheduled and timed. For example, a student can take five-minute breaks every 30 minutes.

    Distractions can be even more detrimental when studying a subject the student does not enjoy. This tempts them to take unnecessary “quick breaks,” preventing them from making the most of their scheduled study sessions.

    For a student to remain focused, they should cut out all possible distractions that might lure their attention away from studying. One way to do this is by avoiding using smartphones or other electronics. If they’re necessary for research purposes, turn off all notifications and avoid visiting websites that are not essential to the study session.',
    'BloEnabled'=>'false'




]);

Blogs::create([
    'BloImage'=>'content-guidelines-62b4543f9d1bc-sej-1280x720.png',
    'BloVideo'=>'https://www.youtube.com/embed/oAbyfbZsRxg?autoplay=1&mute=1',
    'BloTitle'=>'Back to School Tips: How to Make Studying a Success',
    'BloDescription'=>'Now that schools and universities are starting to open their doors again after the COVID-19 pandemic, students are excited to go back to their usual routine. However, some are still not ready for the sudden change — especially those who still don’t know how to start studying.

    According to a study, the sudden academic freeze due to the COVID-19 pandemic has caused some students to lose their momentum in learning — including their ability to focus and study well. Since most schools today hold face-to-face classes, it’s time for students to learn how to study again and adapt to the back-to-school routine.

    Here are some back-to-school tips to help you become successful in studying.

    Be Organized
    Organization is always important for students. According to TeensHealth, proper organization skills makes things easier. If you are well-organized, you can easily fall into a seamless and smooth routine.

    When you’re studying, organize everything you need, from ensuring that your desk is arranged neatly to organizing your lessons and how you want to study them. For example, when you organize your notes according to their difficulty level, you will be able to understand them a lot easier. Organizing your notes can also help you stay on track without being distracted or losing interest.

    Studying in an organized study space can also help your brain focus more. When everything is arranged and placed neatly, you will be able to have a clearer mind. Before you start studying, you can try tidying your desk first and then preparing everything you need, like your notebooks and pens. Otherwise, you are likely to waste a lot of time in an unorganized study space.

    Pay Attention to Your Classes
    Paying attention during your class will allow your brain to absorb the lessons and refresh them later on when you are studying. When you pay attention to the lessons, you will be able to expand your knowledge.

    For example, your teacher says something important that is not written in your textbook or on the whiteboard. Because you paid attention to your teacher, you were able to learn more information about the lesson. When you study the material later, you can expand this information by researching more about it, either from the books in your library or through the internet when you get home. Making lengthy notes during the lectures is unnecessary, but you should at least note the important points.

    Stay Away from Distractions
    When you’re studying, stay away from objects or situations that you know can distract you. For example, if you’re using your mobile device or laptop to research, it would be best to turn your device on airplane mode, so you won’t get distracted by messages or calls.

    Aside from that, you should also stay away from other distractions like your social media accounts. According to a study, 82% of students today get distracted by social media while studying. If you want to be successful when you’re studying, it would be best to log out from your social media accounts first — or just don’t open them until you’re done studying.

    Back to School Tips
    Back to School Tips
    Manage Your Schedule
    Time management and dividing your schedule are also key factors for more successful studying. In fact, it can be the make-or-break factor when it comes to how successful you are as a student. You should never force yourself to learn a lot of things at the same time. Your brain is indeed powerful, but it can also get drained. If you want to absorb your lessons, make sure to study them one at a time.

    You can start by setting a schedule for each subject. You also have to make sure to put small breaks in between each session. According to Edutopia, breaks can help the brain process information, so you will be better at remembering the material.

    Take Down Good Notes
    Taking down notes can also help you study and take in all information more successfully. Don’t try to write down everything; it will only cause your brain to be disinterested in learning. Instead, take down notes and only write the key points of each lesson. That way, you will be able to learn all the important details more easily.

    You also have to make sure that your notes aren’t messy. You can use highlighter pens or sticky notes to make sure your notes are clean and well-organized. Notes that are taken properly — or even color-coded — can also help you find information easily without wasting any study time.

    Reading Is Not Studying
    Simply reading your notes isn’t studying. You are not absorbing anything when you read plainly without stopping. When you’re reading, you need to be actively engaged with your materials as well.

    There are many ways to get engaged with your reading materials, like making your own quiz or creating a concept map or diagram to better understand your lessons.

    Re-reading your notes over and over is also not recommended. When you re-read phrases or explanations during an exam, it can lead to forgetting. Instead, reading and jotting down the key points from what you have read can help you absorb your lessons much better. It is one of the reasons why note-taking is important to ensure you can read them at a later stage to prepare for an

    Use Learning Tools
    There are many learning tools available in the market today. You can use flashcards to memorize formulas or mnemonics to remember simple concepts or lists. Learning tools can help you be successful in studying. Modern applications can also help you in studying through proper organization and time management.

    Test Yourself
    Testing yourself after studying can also help you understand your lessons better. Try asking yourself questions that may be on the test you’re studying for, or have a friend quiz you. This will help you compare and contrast things as well as develop your critical thinking.

    Silence Isn’t Always the Answer.
    Sometimes, complete and utter silence does not help you at all. Some people can’t focus on studying if they don’t hear a single thing. Knowing which noise environment works best for you is very important.

    Some people concentrate better if background noise is happening while they are studying. Some students love to listen to classical music when studying, while others like to hear specific noises. Complete silence may not work for you if you want to be successful when studying, especially since active studying requires you to get engaged with your materials. It is important to determine your learning style and environment in which you can learn better.

    Eat Healthy Foods
    Most students tend to ignore their diet’s significance and its role in their brain power and studying skills. When you eat healthy foods, you will be able to take in healthy nutrients and vitamins that are good for your brain. When your brain is healthy, you will be able to understand your lessons more clearly.

    According to a study from Harvard, leafy vegetables like spinach, kale, broccoli, and collards are rich in vitamin K, folate, and beta carotene, which are vitamins for our brains. When you are studying, be sure to bring snacks with you as well. Studying with an empty stomach will not help you absorb things easily — it’ll just distract you.

    Get Enough Sleep
    Sleeping is as important as eating. Some students sacrifice their sleep just to study more. However, this practice does not help at all. In fact, losing sleep while studying will only slow down your brain. Instead of absorbing more information, your brain will easily forget things because you lack sleep.

    Make sure to get the right amount of sleep — around eight hours — so you will be able to refresh your brain and energize your whole body.

    The Verdict
    If you want to become successful in studying, you need to make sure that you have the right knowledge and guidance. Without proper steps or a routine to follow, you will only lose some of your precious time and effort. Make sure to follow the steps provided above to help yourself become better at studying!

    References:
    https://www.oxfordlearning.com/how-to-study-effectively/
    https://www.routledge.com/blog/article/10-tips-for-successful-studying
    https://opportunity.org/learn/lists/10-habits-of-successful-students
    https://www.how-to-study.com/study-skills-articles/study-habits-of-successful-students.asp

    FAQs
    How do you prepare to go back to school?
    In order to be a successful student, you should follow these tips to go back to school:
    Start the routine early, which means going to bed earlier at night and waking up early every day, even before school starts. It will help you in building a healthy sleep routine.
    Mentally prepare yourself to tackle the school’s assignments and exams by completing any summer tasks you might have or practicing online quizzes.
    Do not be overwhelmed, as anxiety associated with going back to school is quite common.

    How can I be successful in school and life?
    You can be successful by following these tips:
    Always be focused on your studies as it is the gateway to a prosperous future.
    Set SMART goals.
    Do proper time management in every aspect of your life.
    Participate in classroom discussions and make good relationships with your teachers to get their guidance.

    How can I get hurt not to go to school?
    You should never pretend to get hurt or fake stomachaches to avoid going to school, as it will adversely impact your studies and future. However, if there is any genuine reason for which you do not want to go to school, you should discuss it with your parents, teachers, or any other adult to sort out the issue.

    How can you make life easier in school?
    The tips and tricks discussed throughout this article will help you in making your life easier in school. Proper time management, a healthy diet, note-taking, getting enough sleep, and focused studying are some of the most important ways to succeed at school.',
    'BloEnabled'=>'true'




]);









Events::create([
    'EvImage'=>'content-guidelines-62b4543f9d1bc-sej-1280x720.png',
    'EvTitle'=>'First',
    'EvDescription'=>'How can I be successful in school and life?
    You can be successful by following these tips:
    Always be focused on your studies as it is the gateway to a prosperous future.
    Set SMART goals.
    Do proper time management in every aspect of your life.
    Participate in classroom discussions and make good relationships with your teachers to get their guidance.',
    'EvEventdate'=>'2022-09-01T15:18',
    'EvLink'=>'https://dribbble.com/shots/17138699-ozagi-Blog-Website-landing-page',
    'EvAddress'=>'Al Sabbah Center, Corniche Al Mazraa',
    'EvLocation'=>'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13249.47371981369!2d35.491847!3d33.880164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f173a2acf993b%3A0x69bbabbc1d47485a!2sAmaken%20-%20Recruitment%20Agency%20in%20Lebanon!5e0!3m2!1sen!2slb!4v1663588927232!5m2!1sen!2slb',

]);

Events::create([
    'EvImage'=>'content-guidelines-62b4543f9d1bc-sej-1280x720.png',
    'EvTitle'=>'Second',
    'EvDescription'=>'How can I get hurt not to go to school?
    You should never pretend to get hurt or fake stomachaches to avoid going to school, as it will adversely impact your studies and future. However, if there is any genuine reason for which you do not want to go to school, you should discuss it with your parents, teachers, or any other adult to sort out the issue.',
    'EvEventdate'=>'2022-12-01T15:18',
    'EvLink'=>'https://dribbble.com/shots/17138699-ozagi-Blog-Website-landing-page',
    'EvAddress'=>'Al Sabbah Center, Corniche Al Mazraa',
    'EvLocation'=>'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13249.47371981369!2d35.491847!3d33.880164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f173a2acf993b%3A0x69bbabbc1d47485a!2sAmaken%20-%20Recruitment%20Agency%20in%20Lebanon!5e0!3m2!1sen!2slb!4v1663588927232!5m2!1sen!2slb',

]);


Events::create([
    'EvImage'=>'content-guidelines-62b4543f9d1bc-sej-1280x720.png',
    'EvTitle'=>'Third',
    'EvDescription'=>'How can you make life easier in school?
    The tips and tricks discussed throughout this article will help you in making your life easier in school. Proper time management, a healthy diet, note-taking, getting enough sleep, and focused studying are some of the most important ways to succeed at school.',
    'EvEventdate'=>'2022-11-01T15:18',
    'EvLink'=>'https://dribbble.com/shots/17138699-ozagi-Blog-Website-landing-page',
    'EvAddress'=>'Al Sabbah Center, Corniche Al Mazraa',
    'EvLocation'=>'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13249.47371981369!2d35.491847!3d33.880164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f173a2acf993b%3A0x69bbabbc1d47485a!2sAmaken%20-%20Recruitment%20Agency%20in%20Lebanon!5e0!3m2!1sen!2slb!4v1663588927232!5m2!1sen!2slb',

]);


    }
}
