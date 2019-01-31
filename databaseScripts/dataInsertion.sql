

INSERT INTO category (category) VALUES ('Student'), ('Educator'), ('Both');

ALTER TABLE settings AUTO_INCREMENT = 1;
INSERT INTO settings (settingsKey, settingsValue)
VALUES
  ('Welcome Section Title','Are you in touch with yourself?'),
  ('Welcome Section Subtitle','Find out with Mindfulness at Monash.'),
  ('Welcome Section Masthead', 'https://i.imgur.com/lECJEId.jpg'),
  ('Who Are We Section Title','Who Are We?'),
  ('Who Are We Section Subtitle','We are a professionally and academically-experienced team of Mindfulness experts & researchers willing to help you understand better how your brain works.<br><br>Give us a call or send us an email if you have any queries about Mindfulness at Monash.'),
  ('Who Are We Section Masthead','https://i.imgur.com/5JJENWA.jpg'),
  ('Who Are We Section Staff(1) Name','Dr. Richard Chambers (Facilitator) '),
  ('Who Are We Section Staff(1) Email','richard.chambers@monash.edu'),
  ('Who Are We Section Staff(1) Description','Richard is a clinical psychologist specialising in mindfulness-based therapies. He is involved in mindfulness research, has published peer-reviewed journal articles and is co-author of Mindful Learning along with Dr Craig Hassed. Also, Richard was involved in the development of Smiling Mind, a free mindfulness app and not-for-profit aiming to get mindfulness into the Australian school curriculum by 2020. He works with a number of educational institutions and businesses interested in using mindfulness to improve wellbeing and performance.'),
  ('Who Are We Section Staff(1) Photo', 'https://i.imgur.com/peN3Gbb.jpg'),
  ('For Students Masthead','https://i.imgur.com/hI6nuXo.jpg'),
  ('For Educators Masthead','https://i.imgur.com/Gpm44o1.jpg');
  
INSERT INTO article (title, description, body, created, modified, category_id, status)
VALUES 
('For Students',
   'Mindfulness helps to improve mental health, improve academic performance and best of all - it\'s easy! Find out how you can get back in touch with your mind.', '<p>Here at Mindfulness at Monash, we not only teach you the benefits of Mindfulness but also how to apply it to your busy student life. As a student, you have many responsibilities and sometimes it can feel overwhelming. Sometimes your instinctual approach is to multitask, attempting to do multiple things at once. Sometimes you might try to think of a strategy to tackle your workload. While possible, these solutions are ultimately flawed and do not take into account the limits of your mind &amp; body.</p>
<p>Working while being unaware of your mind &amp; body can lead to procrastination, ineffective productivity and at worst, emotional distress. By being conscious of how your own body deals with stress, it frees your mind to figure out how to overcome your work. It becomes less of a personal concern and instead simply becomes a problem to solve.<br /><br /><img src="https://i.imgur.com/Gpm44o1.jpg" alt="Someone writing on a book." width="504" height="336" /></p>
<h2>Benefits of mindfulness</h2>
<p>Research shows that mindfulness can:</p>
<ul>
<li>Reduce stress, anxiety and depressive symptoms</li>
<li>Increase resilience and peace of mind</li>
<li>Enhance cognitive performance eg concentration, memory and processing speed</li>
<li>Improve study and work performance</li>
<li>Improve relationships and overall wellbeing</li>
</ul>
<p>Find out more about our Programs and Resources.</p>"', sysdate(), sysdate(), 1, 'published'),

('For Educators',
   'Mindfulness is beneficial for your students\' wellbeing - as well as yours\'. Find out how you can impart the benefits of mindfulness to you and your students.', '<p>Mindfulness at Monash provides courses and resources for our fellow educators to not only teach mindfulness to their students, but also practice it themselves. After all, it makes little sense to not practice what you preach, especially if it is something as personally and subjectively affectual as mindfulness.</p>
<p>Mindfulness&rsquo; effectiveness varies between different people and it is difficult to obtain exact results, which is why it is important that educators practice alongside their students in person as much as they can. To understand better how mindfulness works, educators can take up courses or look to this blog to learn more about it.<br /><br /><img src="https://i.imgur.com/lECJEId.jpg" alt="" width="579" height="366" /></p>"',
   sysdate(), sysdate(), 2, 'published'),

  ('Benefits of Mindfulness', 'How does mindfulness benefit your study life and beyond?',
   'This article is still under maintenance.<br /><br /><img src="https://i.imgur.com/FzVV1r9.jpg" alt="" width="706" height="469" />',
   sysdate(), sysdate(), 1, 'archived'),

  ('Quick tips on Mindfulness', 'Don\'t have the time for 15 minutes of meditation? No sweat! You can do it too in 5 minutes.', 'This article is under maintenance.<br /><br /><img src="https://i.imgur.com/FzVV1r9.jpg" alt="" width="757" height="503" />', sysdate(), sysdate(), 1, 'published'),

  ('Train the trainer', 'Want to enhance your mindfulness practice?', '<p>This four-week program is aimed at people who have done basic mindfulness training, have a regular personal practice of mindfulness, and now wish to enhance skills in teaching it in various settings.</p>
<p>This program is aimed at people who have completed basic mindfulness training, have a regular personal practice of mindfulness and wish to start teaching it to others. Participants will learn how to:</p>
<ul>
<li>introduce mindfulness as a concept</li>
<li>teach mindfulness meditation</li>
<li>facilitate mindful inquiry and debriefing</li>
<li>work with groups.</li>
</ul>
<p>Topics include: introducing mindfulness, teaching mindfulness meditation, skills in debriefing participants\' experience, and working with groups.</p>
<p><strong>Facilitator:</strong>&nbsp;Dr Craig Hassed</p>
<h3><strong>Dates and bookings</strong></h3>
<p>The program runs for four consecutive weeks in the Clayton Campus Centre.</p>
<p><a href="https://my.monash.edu.au/news-and-events/bookings/hubs/search/?category_id=-1&amp;campus_id=-1&amp;keywords=train+the+trainer&amp;type=upcoming&amp;sort=date&amp;action_search=Search">See the available session dates and register online</a>.</p>
<h3><strong>Contact for enquiries</strong></h3>
<p>Telephone: 9905 2981<br />Email:&nbsp;<a href="mailto:mentalhealth@monash.edu?subject=Train%20the%20trainer">mentalhealth@monash.edu</a></p>', sysdate(), sysdate(), 2, 'draft');

INSERT INTO users (username, password, email, passkey) values ('admin', '$2y$10$Y3uXuRDr3fybr6sNT0GmrOFLmjbOrxWFQjsWWJs/ndzl7VDZ/wbK.', 'mindfulnessatmonash@gmail.com', 0);
/*password, when dehashed, is 'test'*/