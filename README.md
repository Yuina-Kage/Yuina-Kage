# personalcolor_app

・データベース名:personalcolor_app
・ユーザー名:admin
・パスワード:admin_pass


CREATE DATABASE personalcolor_app;

CREATE USER admin identified by 'admin_pass';

GRANT ALL ON personalcolor_app.* to admin;

USE personalcolor_app;



<!-- CREATE TABLE diagnoses (
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
sex TINYINT NOT NULL,
question_id INT NOT NULL,
content VARCHAR(255) NOT NULL,
yes_id int,
no_id int,
type_id int,
UNIQUE sex_question_id_index(sex, question_id)
); -->

CREATE TABLE diagnoses (
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
content VARCHAR(255) NOT NULL,
yes_id int,
no_id int,
yes_type_id int,
no_type_id int
);



CREATE table types (
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
sex TINYINT NOT NULL,
type VARCHAR(50) NOT NULL,
image VARCHAR(255) NOT NULL,
subtitle VARCHAR(50) NOT NULL,
body text NOT NULL,
skin_color VARCHAR(255) NOT NULL,
eye_color VARCHAR(255) NOT NULL,
hair_color VARCHAR(255) NOT NULL
);



<!-- INSERT INTO diagnoses (id, sex, question_id, content, yes_id, no_id, type_id) VALUES
(1, 0, 1, 'あなたは女性である', 2, 2, NULL),
(2,	1, 2, '肌の色は色白で透明感がある', 3, 4, NULL),	
(3,	1, 3, '髪の色は黒または暗めのこげ茶である', 5, 6, NULL),	
(4,	1, 4, '髪の色は黒または暗めのこげ茶である', 7, 8, NULL),	
(5,	1, 5, 'ボーダーは細めよりも太めが好き', 9, 10, NULL),	
(6, 1, 6, '頬に赤みがでやすい', 10, 9, NULL),
(7,	1, 7, '大柄な模様の服が似合うと言われる', 11,	12, NULL),	
(8,	1, 8, '頬に赤みがでやすい', 12, 11, NULL),	
(9,	1, 9, '白目と黒目のコントラストがしっかりしている', 4, 2, 1),
(10, 1,	10, '鮮やかな色の服を着ると服に負けてしまう', 2, 4, 2),
(11, 1,	11, 'クリアなアイシャドウがなじみにくい', 3, 1, 3),
(12, 1,	12,	'黒よりもネイビーの方がしっくりくる', 1, 3, 4);


INSERT INTO diagnoses (id, sex, question_id, content, yes_id, no_id, type_id) VALUES
(13, 2,	2, '肌の色は色白で透明感がある', 3, 4, NULL),	
(14, 2,	3, '髪の色は黒または暗めのこげ茶である', 5, 6, NULL),	
(15, 2,	4, '髪の色は黒または暗めのこげ茶である', 7, 8, NULL),	
(16, 2,	5, 'ボーダーは細めよりも太めが好き', 9, 10, NULL),	
(17, 2,	6, '頬に赤みがでやすい', 10, 9, NULL),	
(18, 2,	7, '大柄な模様の服が似合うと言われる', 11, 12, NULL),	
(19, 2,	8, '頬に赤みがでやすい', 12, 11, NULL),
(20, 2,	9, '白目と黒目のコントラストがしっかりしている', 8, 6, 5),
(21, 2,	10, '鮮やかな色の服を着ると服に負けてしまう', 6, 8, 6),
(22, 2,	11, 'クリアなアイシャドウがなじみにくい', 7, 5, 7),  
(23, 2,	12, '黒よりもネイビーの方がしっくりくる', 5, 7, 8); -->

INSERT INTO diagnoses (id, content, yes_id, no_id, yes_type_id, no_type_id) VALUES
(1, 'あなたは女性である', 2, 13, NULL, NULL),
(2,	'肌の色は色白で透明感がある', 3, 4, NULL, NULL),	
(3,	'髪の色は黒または暗めのこげ茶である', 5, 6, NULL, NULL),	
(4,	'髪の色は黒または暗めのこげ茶である', 7, 8, NULL, NULL),	
(5,	'ボーダーは細めよりも太めが好き', 9, 10, NULL, NULL),	
(6, '頬に赤みがでやすい', 10, 9, NULL, NULL),
(7,	'大柄な模様の服が似合うと言われる', 11, 12, NULL, NULL),	
(8,	'頬に赤みがでやすい', 12, 11, NULL, NULL),	
(9,	'白目と黒目のコントラストがしっかりしている', NULL, NULL, 4, 2),
(10, '鮮やかな色の服を着ると服に負けてしまう', NULL, NULL, 2, 4),
(11, 'クリアなアイシャドウがなじみにくい', NULL, NULL, 3, 1),
(12, '黒よりもネイビーの方がしっくりくる', NULL, NULL, 1, 3);


INSERT INTO diagnoses (id, content, yes_id, no_id, yes_type_id, no_type_id) VALUES
(13, '肌の色は色白で透明感がある', 14, 15, NULL, NULL),	
(14, '髪の色は黒または暗めのこげ茶である', 16, 17, NULL, NULL),	
(15, '髪の色は黒または暗めのこげ茶である', 18, 19, NULL, NULL),	
(16, 'ボーダーは細めよりも太めが好き', 20, 21, NULL, NULL),	
(17, '頬に赤みがでやすい', 21, 20, NULL, NULL),	
(18, '大柄な模様の服が似合うと言われる', 22, 23, NULL, NULL),	
(19, '頬に赤みがでやすい', 23, 22, NULL, NULL),
(20, '白目と黒目のコントラストがしっかりしている', NULL, NULL, 8, 6),
(21, '鮮やかな色の服を着ると服に負けてしまう', NULL, NULL, 6, 8),
(22, 'クリアなアイシャドウがなじみにくい', NULL, NULL, 7, 5),  
(23, '黒よりもネイビーの方がしっくりくる', NULL, NULL, 5, 7);



INSERT INTO types (id, sex, type, image, subtitle, body, skin_color, eye_color, hair_color) VALUES
(1,	1, 'スプリングタイプ', 'woman_spring.jpg',	'イエローベース', 
'春のお花畑を思わせる、暖色の濁りのない彩度の高い色がお似合いのタイプ。周りの人を楽しくさせてしまう明るい印象が特徴です。芸能人では、深田恭子さん、石原さとみさん、橋本環奈さんです。', 
'アイボリーベージュ or 小麦色', '明るいブラウンでガラスのようにキラキラしている', '明るいブラウンが多い'),
(2,	1, 'サマータイプ',	 'woman_summer.jpg', 'ブルーベース', 
'夏のアジサイを思わせる、ふんわりとしたパステル系の色がお似合いのタイプ。目の印象が優しく、寒色の柔らかい色で知的で上品な印象です。芸能人では、広末涼子さん、綾瀬はるかさん、新垣結衣さんです。', 
'ピンクベージュ、またはソフトな浅黒いお肌', 'ソフトブラックの人が多く、まれに茶色の瞳の人もいる', 'やわらかい黒髪'),
(3,	1, 'オータムタイプ', 'woman_autumn.jpg', 'イエローベース', 
'秋の紅葉を思わせる暖色系のアースカラーがお似合いになるタイプ。女性はナチュラル派と女性らしいつややかな印象の２タイプの方がいらっしゃるのが特徴です。男性は落ち着いた包容力のある印象があります。芸能人では、安室奈美恵さん、北川景子さん、香里奈さんです。', '毛穴が少ない象牙のようなクリーム色の肌か濃い小麦色', 'ダークブラウン', ''),
(4,	1, 'ウィンタータイプ', 'woman_winter.jpg', 'ブルーベース', 
'冬の雪のような純白と漆黒の黒、コントラストがお似合いのグループ。ロイヤルブルー、ボルドーレッドなど、寒色のビビットな色もお似合いになります。芸能人では、土屋太鳳さん、広瀬すずさん、渡辺直美さんです。', 
'肌の色は雪女のように白いか浅黒い肌', '白目と黒目のコントラストがあり、「目力」があると言われる', '');


INSERT INTO types (id, sex, type, image, subtitle, body, skin_color, eye_color, hair_color) VALUES
(5,	2, 'スプリングタイプ', 'man_spring.jpg', 'イエローベース', 
'暖色の濁りのない彩度の高い色がお似合いになるタイプ。芸能人では、香取慎吾さん、櫻井翔さん、山下智久さん、岩田剛典さんです。', 'お肌に黄色の色素が多いので、肌の色が白い人は明るいベージュ肌日に焼けている人は明るい小麦色皮膚が薄いので鼻の上だけ赤くなる人も多い', '瞳の色は明るいブラウン', '子供の頃は髪の毛が栗毛だったという人も'),
(6,	2, 'サマータイプ', 'man_summer.jpg', 'ブルーベース', 
'青みにある寒色系の柔らかい色が似合うタイプ。芸能人では、二宮和也さん、向井理さん、綾野剛さん、福山雅治さんです。', 
'お肌が青い色素が多いピンク系で、色の白い人はピンクベージュ肌日に焼けている人は赤味が出るソフトな浅黒い肌お肌がピンク系なので、座っているだけでお顔が赤く見える人も多い', '瞳は優しいソフトブラック', ''),
(7,	2, 'オータムタイプ', 'man_autumn.jpg', 'イエローベース', 
'暖色の深いアースカラーがお似合いになるタイプ。芸能人では、木村拓哉さん、大野智さん、相葉雅紀さん、松坂桃李さんです。', 
'お肌に黄色の色素が多いので、肌の色が白い人は深いベージュ肌日に焼けている人は濃い小麦色顔に赤みが出にくいので、顔色が悪く疲れて見える人も多い', '瞳の色は落ち着いた印象のダークブラウン', ''),
(8,	2, 'ウィンタータイプ', 'man_winter.jpg', 'ブルーベース',	'寒色系の彩度が高くて深い色がお似合いになるタイプ。芸能人では、長瀬智也さん、稲垣吾郎さん、松本潤さん、小栗旬さんです。', 'お肌に青い色素が多いので、生まれつき浅黒いお肌お肌に赤味がないのですが、不思議と顔色が悪く見えません', '瞳の色が強い黒目で、白目とのコントラストがあり、「目力が強い」と言われるタイプ', '');




