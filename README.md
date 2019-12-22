# Hanyang ERICA Univ. Division Of Computer science web page renewal project

## 0. Members (구성원)
#### - 이용현 2019034684 / A1paBeta
#### - 윤진난 2019044802 / Jinnan-Yun
#### - 추효정 2019060637 / choohyojung
#### - 장종훈 2019021003 / jh000408

## 1. Why? (개발동기)
#### - 기존 소프트웨어학부의 홈페이지를 새로운 UI/UX 디자인으로 갱신하고 싶다는 생각이 들었습니다.
#### - 학과 소개 페이지를 오픈소스로 제작하여, 비용이 많이들지 않고도 학과를 소개하는 페이지를 만드는 것이 저희 프로젝트의 최종목표입니다.
#### - 본 프로젝트는 현재 소프트웨어학부 홈페이지에 인트로 페이지를 추가하고, 메인 페이지의 구성을 바꿔보는 프로젝트입니다.
#### - 본 프로젝트를 통해 HTML5, CSS3, JavaScript(JQuery)를 이용하여 Web Front-end 개발에 대한 지식을 쌓고 그 지식을 기반으로 새로운 창작물을 만드려합니다.
#### - 본 프로젝트를 통해 header, article, footer 구조를 이해하고, 이를 실제로 구현하며 웹 문서의 구조화에 대해서 익히고자 합니다.
#### - 이미지 슬라이더를 JavaScript(JQuery)로 직접 구현하며 JQuery에서 CSS Property를 어떻게 변경하는지에 대해서 익히고자 합니다.
#### - Youtube 영상을 참조하는 작업을 진행하려합니다.

## 2. Use Languages (사용 언어)
#### i. web front-end : html5, css3, jquery
#### ii. web back-end : jquery-ajax, php7
#### iii. database : mysql

## 3. To Do
#### - 재학중인 학과 홈페이지의 일부분을 수정하는 작업을 통해 HTML, CSS, JS 개발을 접한다.
#### - HTML에서 header, article, footer의 구성을 이해한다.
#### - JS를 활용하여 이미지 슬라이드를 제작해본다.
#### - Youtube 영상을 IFrame으로 참조하는 작업을 진행한다.
####   본 프로젝트는 웹 사이트 Copy를 통해 웹 개발을 접해보기 위한 프로젝트이다. Copy 대상 사이트로 소프트웨어학부 페이지를 선정했으며,
####   인트로 페이지와 메인 페이지를 수정해봄으로서 웹 개발 & 디자인을 해보는 경험을 할 수 있었다.

## 4. Making Issue (개발 중 이슈)
#### 가. 인트로 페이지(index.php)에서 이미지 슬라이드 라이브러리를 외부참조했으나, 적용되지 않았다.
####    -> 해결방안으로 javascript로 직접 이미지가 변경되는 알고리즘과 코드를 제작했다.
#### 나. video 태그로 youtube영상을 참조해왔을 때 Read permission이 제한되는 상황을 발견했다.
####    -> youtube document를 참조하여 iframe으로 참조해서 해결했다.
#### 다. force push를 해버려 README.md 내용이 다 날라갔다. 
####    -> --force 옵션은 위험한 옵션이라 주의해서 사용해야 한다. 

## 5. 서버 사양
#### 가. Apache(웹 서버) : Apache 2.4.41
#### 나. php(서버 스크립트) : PHP 7.1.33 + SQLite 2.8.17/3.30.1. + multibyte (mbstring) support
#### 다. DB(데이터베이스) : MariaDB 10.4.10, phpMyAdmin 4.9.2

## 6. 페이지 소개
<img width="1680" alt="startpage" src="https://user-images.githubusercontent.com/55147540/71320955-60095300-24f6-11ea-8c31-848758cd7c12.png">

#### 한양대학교 소프트웨어학부 홈페이지와 한양대학교 홈페이지를 들어갈 수 있는 화면입니다. 
<img width="1680" alt="main" src="https://user-images.githubusercontent.com/55147540/71321001-dc039b00-24f6-11ea-9799-69ad27c557bb.png">
<img width="1680" alt="main2" src="https://user-images.githubusercontent.com/55147540/71321017-fc335a00-24f6-11ea-9fe2-f9b986f8eb1f.png">

#### 소프트웨어학부 메인 페이지입니다. 교과과정, 입학안내, 장학제도, 성적졸업에 대한 정보가 있는 학사정보와 홍보자료를 볼 수 있도록 구성 했습니다. 
