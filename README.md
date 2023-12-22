<hr><h1 align="center" style="letter-spacing = 300px">
  FILMOPEDIA
  <br>
  Movies Databases
  <br>
</h1><hr>

<p align="center">
  <img src="https://img.shields.io/badge/VSCode-0078D4?style=for-the-badge&logo=visual%20studio%20code&logoColor=white"><br>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"><br>
  <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white">
  <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white">
</p><hr>

## Description
Website ini merupakan website movies database yang menampilkan data-data yang terdapat didalam film.
pada halaman home visittor bisa melihat detail informasi dari sebuah film, dan pda halaman admin memilik otoriras
untuk mengubah dan menghapus data film.

## Features
- Shows Data Films
- Adding New Films
- Edit Films Data
- Deletes Films Data
- Searchs Film
- Creates Account
- Sessions And Cookie
- Remember Me (For Login)

## Requirements
- [Git](https://git-scm.com/) : Sebagai Version Control pada project yang sedang dibangun.
- [VsCode](https://code.visualstudio.com/) : Sebagai Code Editor 
- [XAMPP](https://www.apachefriends.org/index.html) : Sebagai media atau web server localhost yang bisa digunakan secara offline. 
- [HTML](https://developer.mozilla.org/en-US/docs/Web/HTML) : Hypertext Markup Language sebagai bahasa markup standar yang digunakan untuk membuat halaman website dan aplikasi web.
- [CSS](https://developer.mozilla.org/en-US/docs/Web/CSS) : Cascading Style Sheets sebagai bahasa pemrograman yang digunakan untuk mengatur gaya tampilan website.
- [JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript) : Sebagai bahasa pemrogaman yang membuat interaktifitas pada tampilan website.
- [Bootstrap](https://getbootstrap.com/) : Sebagai Framework HTML, CSS,JavaScript untuk mempercepat proses pengembangan Web Responsive.
- [Php](https://www.php.net/docs.php) : Sebagai bahasa pemrogaman untuk membangun sebuah Website menjadi Dinamis.

## Installation

Clone Repository
```bash
  git clone https://github.com/abaypakeky/filmopedia-fix.git
```

kemudian pindahkan folder repository yang telah di clone ke alamat :
``` bash
  c:/xampp/htdocs
```

Pergi ke directory Repository yang sudah di clone
```bash
  cd c:/xampp/htdocs/filmopedia-fix
```

Buka Aplikasi XAMPP Ceklis pada bagian Apache dan MySql
![image](https://github.com/abaypakeky/filmopedia-fix/assets/120354958/ffc061b4-4049-4c4f-b622-ae0107c5de8f)

Buka [Localhost Page](http://localhost/phpmyadmin/) pada Web Browser
```
(https://localhost/phpmyadmin)
```
![image](https://github.com/abaypakeky/filmopedia-fix/assets/120354958/c046d69a-5bb2-419a-8fcd-d2f426ec2ef8)

Buat File database sesuai dengan nama database yang terdapat pada Repository
```bash
  CREATE DATABASE db_filmopedia;
```

Kemudian import file `db_filmopedia` pada database yang sudah dibuat
![image](https://github.com/abaypakeky/filmopedia-fix/assets/120354958/6109b907-dba2-4384-9ff9-6a59a26d883a)

Instalasi telah selesai, kemudian jalankan Project yang telah dibuat
```bash
  https://localhost/xampp/htdocs/filmopedia-fix/
```

Jika semua proses dilakukan dengan benar maka tampilan akan seperti gambar dibawah
![image](https://github.com/abaypakeky/filmopedia-fix/assets/120354958/d4b4e8ae-03e6-470a-b9b4-a70c223d2163)

## File Structure
``` bash
  📦filmopedia-fix
 ┣ 📂.git
 ┃ ┣ 📂hooks
 ┃ ┃ ┣ 📜applypatch-msg.sample
 ┃ ┃ ┣ 📜commit-msg.sample
 ┃ ┃ ┣ 📜fsmonitor-watchman.sample
 ┃ ┃ ┣ 📜post-update.sample
 ┃ ┃ ┣ 📜pre-applypatch.sample
 ┃ ┃ ┣ 📜pre-commit.sample
 ┃ ┃ ┣ 📜pre-merge-commit.sample
 ┃ ┃ ┣ 📜pre-push.sample
 ┃ ┃ ┣ 📜pre-rebase.sample
 ┃ ┃ ┣ 📜pre-receive.sample
 ┃ ┃ ┣ 📜prepare-commit-msg.sample
 ┃ ┃ ┣ 📜push-to-checkout.sample
 ┃ ┃ ┣ 📜sendemail-validate.sample
 ┃ ┃ ┗ 📜update.sample
 ┃ ┣ 📂info
 ┃ ┃ ┗ 📜exclude
 ┃ ┣ 📂logs
 ┃ ┃ ┣ 📂refs
 ┃ ┃ ┃ ┣ 📂heads
 ┃ ┃ ┃ ┃ ┣ 📜akbar-filmopedia
 ┃ ┃ ┃ ┃ ┗ 📜main
 ┃ ┃ ┃ ┗ 📂remotes
 ┃ ┃ ┃ ┃ ┗ 📂origin
 ┃ ┃ ┃ ┃ ┃ ┣ 📜akbar-filmopedia
 ┃ ┃ ┃ ┃ ┃ ┣ 📜jabal-filmopedia
 ┃ ┃ ┃ ┃ ┃ ┗ 📜main
 ┃ ┃ ┗ 📜HEAD
 ┃ ┣ 📂objects
 ┃ ┃ ┣ 📂02
 ┃ ┃ ┃ ┗ 📜e6d57e916b8cc8e6a83cebb0ce0fcb46308918
 ┃ ┃ ┣ 📂03
 ┃ ┃ ┃ ┣ 📜211657b687a7fccb9310f634d3a46d37ea1665
 ┃ ┃ ┃ ┗ 📜94d72d269f28faf4c6c65ecfa914d109f892b5
 ┃ ┃ ┣ 📂05
 ┃ ┃ ┃ ┗ 📜33b33118d6444557d0f5173098217a18324af4
 ┃ ┃ ┣ 📂08
 ┃ ┃ ┃ ┣ 📜430325bb5b8cab2bdbaff9bdf58d89de0a1515
 ┃ ┃ ┃ ┗ 📜92a5df387561f25769881bd4ff64747be90874
 ┃ ┃ ┣ 📂0b
 ┃ ┃ ┃ ┗ 📜7ce2ebf9d7032313e7905409ded8ea4b5f5cf0
 ┃ ┃ ┣ 📂0f
 ┃ ┃ ┃ ┗ 📜6c3a34094e1835c8c3c5009041a4284a83a467
 ┃ ┃ ┣ 📂13
 ┃ ┃ ┃ ┗ 📜8799ed02e5785c51cdf10679d79049ef70c924
 ┃ ┃ ┣ 📂15
 ┃ ┃ ┃ ┗ 📜80f4832f39da16b97a960707c74e462ad74c74
 ┃ ┃ ┣ 📂17
 ┃ ┃ ┃ ┣ 📜1a22dbda71a05105b48f9c8859c0aec15d3c69
 ┃ ┃ ┃ ┗ 📜a5411bf2de688f86a9466dc8c37745e145df7d
 ┃ ┃ ┣ 📂18
 ┃ ┃ ┃ ┗ 📜137d68e2b4fd142086ae36488f3480e7908cf5
 ┃ ┃ ┣ 📂1c
 ┃ ┃ ┃ ┣ 📜6a2c93e03619995a2e6cc26c14fc066424967b
 ┃ ┃ ┃ ┗ 📜ad29bdaf3b00e677e2bbd77d2170ac8c8e5343
 ┃ ┃ ┣ 📂1f
 ┃ ┃ ┃ ┣ 📜a11ddaef7b3006edc079631481f41b924ef35a
 ┃ ┃ ┃ ┗ 📜f2dd15d2cc5c143693a381cd0613e1f05b739c
 ┃ ┃ ┣ 📂20
 ┃ ┃ ┃ ┗ 📜8a24674fca947cb7a0aa578274dd1420ff81ed
 ┃ ┃ ┣ 📂21
 ┃ ┃ ┃ ┗ 📜3a949c15d1e21d0a0a4cbd35b60acd052e78ab
 ┃ ┃ ┣ 📂23
 ┃ ┃ ┃ ┗ 📜00c786c238fcf52932470bb990b3be0421f4ee
 ┃ ┃ ┣ 📂24
 ┃ ┃ ┃ ┣ 📜67320aeec4a804474bacd6b4ac3c9a0ef88b7c
 ┃ ┃ ┃ ┗ 📜82dcbfddddae69e7061e8ea27f2cbaab4e539f
 ┃ ┃ ┣ 📂26
 ┃ ┃ ┃ ┗ 📜8211cbd679a3d1d3dc36a869dae23a093247e5
 ┃ ┃ ┣ 📂27
 ┃ ┃ ┃ ┗ 📜933f6ee92668ba533f6f95ef2174e86713b5f4
 ┃ ┃ ┣ 📂28
 ┃ ┃ ┃ ┣ 📜2e01786f7732e1fdf76ec2e7228a00c86875ce
 ┃ ┃ ┃ ┣ 📜c83bb3e363772cd38b0edc7584a7c2295b5aca
 ┃ ┃ ┃ ┗ 📜cf1bd2eb5800b1e4e69c2f6af4303ffcbf4b0b
 ┃ ┃ ┣ 📂2b
 ┃ ┃ ┃ ┗ 📜e507b13d61292861ab6e65a3e6856f3e2cdd2b
 ┃ ┃ ┣ 📂2d
 ┃ ┃ ┃ ┣ 📜265f72ebc5e3c77b95a2bb7a1c63119b690d84
 ┃ ┃ ┃ ┣ 📜6df4b1bee858bdc050d1335afcfaa2e0bc0b70
 ┃ ┃ ┃ ┗ 📜d2333dfb0a3f24d667405ffe92ea46d656c533
 ┃ ┃ ┣ 📂2e
 ┃ ┃ ┃ ┗ 📜22e3c84b532db253c53696f8bb990dc5b2fc9c
 ┃ ┃ ┣ 📂2f
 ┃ ┃ ┃ ┣ 📜0785f0e7be0581b8ddd5439a55e3139e781a1f
 ┃ ┃ ┃ ┗ 📜636a0f116b4436b90546731385dd3a492f68e3
 ┃ ┃ ┣ 📂30
 ┃ ┃ ┃ ┗ 📜aae55e18f7605c9ef5e8e8407b9a76debfd4f5
 ┃ ┃ ┣ 📂34
 ┃ ┃ ┃ ┣ 📜0e37d8f29ca1b1cdb5fc5454f3d7da515f1d63
 ┃ ┃ ┃ ┗ 📜5c4c333b9422be2be7601958229d55fdbf72c3
 ┃ ┃ ┣ 📂35
 ┃ ┃ ┃ ┗ 📜3c56441f8f557a3c20ec682c3aa61eb93ab47a
 ┃ ┃ ┣ 📂36
 ┃ ┃ ┃ ┗ 📜df77db08b9fdef1d71a85099d9472967cdd8df
 ┃ ┃ ┣ 📂37
 ┃ ┃ ┃ ┗ 📜e6f95dc9590269ec7aea3bb305456c572fc74b
 ┃ ┃ ┣ 📂3b
 ┃ ┃ ┃ ┗ 📜ab7dc8d53722b411e7c61e36d9161ac28a3f66
 ┃ ┃ ┣ 📂3d
 ┃ ┃ ┃ ┗ 📜11f4a77291a82f5e96435eaa4c655814961000
 ┃ ┃ ┣ 📂3e
 ┃ ┃ ┃ ┗ 📜5d2227f1611f7dc02e35f53580c0d967ab306a
 ┃ ┃ ┣ 📂3f
 ┃ ┃ ┃ ┗ 📜c9a25874ec5397bb7ede57ef9b77bbab32689e
 ┃ ┃ ┣ 📂41
 ┃ ┃ ┃ ┗ 📜1dbb8a17bebafbf75292a1103e2c2204752515
 ┃ ┃ ┣ 📂42
 ┃ ┃ ┃ ┗ 📜0e5a1530c340fefe71a5c8fc324ea89785c5c9
 ┃ ┃ ┣ 📂43
 ┃ ┃ ┃ ┗ 📜a0a3c9c9041dbc7b41d0ab3bbe795a7ee5fb95
 ┃ ┃ ┣ 📂44
 ┃ ┃ ┃ ┗ 📜8cc39539918690ae2c686027bfda3aaffffbd7
 ┃ ┃ ┣ 📂45
 ┃ ┃ ┃ ┗ 📜2cad83428c71ab059fbb9e9bb5c9352802051d
 ┃ ┃ ┣ 📂46
 ┃ ┃ ┃ ┣ 📜4151abd838ddbad779326ed655e7d34708a32e
 ┃ ┃ ┃ ┣ 📜5638c97c17742dc240e8521a15b7048713ecd2
 ┃ ┃ ┃ ┣ 📜8d19f65b0833b3a8f28cd942c54d0d6a0533bf
 ┃ ┃ ┃ ┗ 📜f0a4493168c31eea347391f98115e2d17fed4c
 ┃ ┃ ┣ 📂47
 ┃ ┃ ┃ ┗ 📜a70f01ed8786180fe10d0e9ff7a54dcc305782
 ┃ ┃ ┣ 📂4b
 ┃ ┃ ┃ ┗ 📜2860cf9696c9a3350dba6b49addac44e6a58ea
 ┃ ┃ ┣ 📂4c
 ┃ ┃ ┃ ┗ 📜479972b1e3acbcc90fab1ab7bee54f29db3d8e
 ┃ ┃ ┣ 📂4d
 ┃ ┃ ┃ ┣ 📜007681fb0e6d7a94a7e8acd4f631f9d41a2efe
 ┃ ┃ ┃ ┣ 📜24a64618375e135c3871d843aac9df444166eb
 ┃ ┃ ┃ ┗ 📜8fb6ad85088670bfa4d2c30a1ed00ab68c9e56
 ┃ ┃ ┣ 📂51
 ┃ ┃ ┃ ┗ 📜b3928acfb220ce74db076ec3a62f30d8b64881
 ┃ ┃ ┣ 📂52
 ┃ ┃ ┃ ┗ 📜bbb774ac4d7151002d10de41f44a333ba6ef85
 ┃ ┃ ┣ 📂53
 ┃ ┃ ┃ ┗ 📜a16d7dd9715605d3ae153a0314669c1c1a5936
 ┃ ┃ ┣ 📂55
 ┃ ┃ ┃ ┗ 📜372ab5fc86aa8290826a7eff08116fcf0abbb9
 ┃ ┃ ┣ 📂58
 ┃ ┃ ┃ ┗ 📜757df9ef89c73e930afd4f921483a823addf70
 ┃ ┃ ┣ 📂5c
 ┃ ┃ ┃ ┗ 📜f118c88a4e50c12a14d0b59142ab9e6f0a94db
 ┃ ┃ ┣ 📂5d
 ┃ ┃ ┃ ┗ 📜a24a9e398204fbc838c3477b45811545ea1aae
 ┃ ┃ ┣ 📂5e
 ┃ ┃ ┃ ┗ 📜e6c0bef1511d6266576a9aa36df6ea6a5a1375
 ┃ ┃ ┣ 📂60
 ┃ ┃ ┃ ┗ 📜b735ef70a3acddced06cb54bb0378e0e0cae53
 ┃ ┃ ┣ 📂61
 ┃ ┃ ┃ ┗ 📜0203d7a4a80e51a5cc83964b7f838b83366443
 ┃ ┃ ┣ 📂62
 ┃ ┃ ┃ ┗ 📜8ef6dcdec9d15ff50df1d9b6f960eeda8ae78c
 ┃ ┃ ┣ 📂63
 ┃ ┃ ┃ ┗ 📜aa15affd5129b28def7ebea2d6a07f6b80faaf
 ┃ ┃ ┣ 📂65
 ┃ ┃ ┃ ┣ 📜085f62a2baf507662c6118bd7600d2caed5339
 ┃ ┃ ┃ ┗ 📜0b2a3b4422243d7839f26a9dfd5622fc220b8b
 ┃ ┃ ┣ 📂6e
 ┃ ┃ ┃ ┗ 📜f6ed664525863c8b439fe979856abf00de9d71
 ┃ ┃ ┣ 📂6f
 ┃ ┃ ┃ ┣ 📜271c08c8893b66d1ec41a719bd730b7592fa97
 ┃ ┃ ┃ ┗ 📜a92330fc10433db457664457e1717dec6d338d
 ┃ ┃ ┣ 📂70
 ┃ ┃ ┃ ┗ 📜a516caacdc043484d325fd27779fa62d935730
 ┃ ┃ ┣ 📂72
 ┃ ┃ ┃ ┗ 📜268d75c145c36269b679ef021a219bc9fefd8c
 ┃ ┃ ┣ 📂73
 ┃ ┃ ┃ ┗ 📜993ed992ad448d01c206671825b1a012f36461
 ┃ ┃ ┣ 📂75
 ┃ ┃ ┃ ┣ 📜81e48c9674b57d8a3bb19fa9810fcd69b9bbf6
 ┃ ┃ ┃ ┗ 📜ab0ed9a7dec89274a4cce097b4de7fe6036f97
 ┃ ┃ ┣ 📂76
 ┃ ┃ ┃ ┣ 📜45bb4e78a6fadcdae5837ac1402e00423ce0b3
 ┃ ┃ ┃ ┗ 📜a689ac13e70a68d30286726b67282121bc6a0c
 ┃ ┃ ┣ 📂77
 ┃ ┃ ┃ ┗ 📜65fae15805beb10a774e134647400bd4fc82ef
 ┃ ┃ ┣ 📂79
 ┃ ┃ ┃ ┗ 📜59e332c4b877908b230bcc749f1d528ab6e2d2
 ┃ ┃ ┣ 📂7a
 ┃ ┃ ┃ ┗ 📜48599d920ecbab711c1aa6d788467d3e721ff7
 ┃ ┃ ┣ 📂7c
 ┃ ┃ ┃ ┣ 📜8aa308dc02929d0a91e105c19b1190d178f2b9
 ┃ ┃ ┃ ┣ 📜d8480def010228bafa7e8942105e9e8ad09145
 ┃ ┃ ┃ ┗ 📜efec2bbd0586b17dd8e117c40f4b7d55001ad6
 ┃ ┃ ┣ 📂7d
 ┃ ┃ ┃ ┣ 📜25c4e009aa1275c01daff916ff1d845d41d731
 ┃ ┃ ┃ ┗ 📜ee49bb71d1ffa856f1930c61a1eceef49b9f02
 ┃ ┃ ┣ 📂7f
 ┃ ┃ ┃ ┗ 📜d33f4c6c96272976a2fda029f816065175d252
 ┃ ┃ ┣ 📂80
 ┃ ┃ ┃ ┣ 📜34bebb1e20af77fb22c9301fe4af1d458420d9
 ┃ ┃ ┃ ┗ 📜986a5f766fdf90fb08a4ceea13a386757a2462
 ┃ ┃ ┣ 📂85
 ┃ ┃ ┃ ┗ 📜dbb5ea10b6ddc0e87dfd0dd782fb7ba30ad347
 ┃ ┃ ┣ 📂87
 ┃ ┃ ┃ ┗ 📜c2db70e2b31391ffdd7e00009e9c0cae3c2db5
 ┃ ┃ ┣ 📂88
 ┃ ┃ ┃ ┗ 📜55368e7434843be6ba81b576b0ee74973d1f00
 ┃ ┃ ┣ 📂8a
 ┃ ┃ ┃ ┗ 📜9aab3bb9d29e38da70204dc8a4b67a72e60072
 ┃ ┃ ┣ 📂8b
 ┃ ┃ ┃ ┣ 📜276c273ccabf2b48d9302c6eaef8132f4f2227
 ┃ ┃ ┃ ┗ 📜33e854b8675550fd3799155d8ae77c72fa2468
 ┃ ┃ ┣ 📂8c
 ┃ ┃ ┃ ┣ 📜013deac523a00cb068452bd026edc8c5b4a1f1
 ┃ ┃ ┃ ┗ 📜582d2d43553e9753ecb69c94c7b0b7989af6fe
 ┃ ┃ ┣ 📂8d
 ┃ ┃ ┃ ┗ 📜7402940bece6bdd3a2fb72756d23612c3927c6
 ┃ ┃ ┣ 📂8e
 ┃ ┃ ┃ ┣ 📜14917e9fcc390d6dbd2575b9b5525d6e3fd562
 ┃ ┃ ┃ ┗ 📜9c00900561e586cb58f662cec0b2715e7d0fda
 ┃ ┃ ┣ 📂8f
 ┃ ┃ ┃ ┣ 📜29102d59858be588c3145cc330ba5f40e218f7
 ┃ ┃ ┃ ┗ 📜86174efc753d9aee09ee53acf57daed3d36507
 ┃ ┃ ┣ 📂90
 ┃ ┃ ┃ ┗ 📜3946e874155cf591631f2782a52beeee19eea8
 ┃ ┃ ┣ 📂94
 ┃ ┃ ┃ ┣ 📜580179f5982158a912def49a04c40c3af5b40a
 ┃ ┃ ┃ ┗ 📜7451528ea89fcfaa6e92e7acf2b3ef79e125e9
 ┃ ┃ ┣ 📂96
 ┃ ┃ ┃ ┣ 📜b1fe9d3cde640806181fb7d118c85e9cec63cb
 ┃ ┃ ┃ ┗ 📜b2aaeec995f092c46ef54bc8031317f0383b14
 ┃ ┃ ┣ 📂99
 ┃ ┃ ┃ ┗ 📜202a6bc9553959e4ba7b1d7f9053e6108a9dc7
 ┃ ┃ ┣ 📂9a
 ┃ ┃ ┃ ┣ 📜709d5df2a149458e131984da34025346e0d399
 ┃ ┃ ┃ ┗ 📜f73e059a5825c9df3cca025d3bdb79d10c1e8b
 ┃ ┃ ┣ 📂9b
 ┃ ┃ ┃ ┣ 📜2aee185fa8e17f60cbe67da365c91cca03961d
 ┃ ┃ ┃ ┗ 📜36c7dd72594d29928c047cb85765e6ffa3487b
 ┃ ┃ ┣ 📂9c
 ┃ ┃ ┃ ┗ 📜fc71f8be645ab8c7ed6275ea902307d1e87848
 ┃ ┃ ┣ 📂9e
 ┃ ┃ ┃ ┣ 📜e9c18594932f594e5bf271306f46e3363e8327
 ┃ ┃ ┃ ┗ 📜fcd6b4b2dca07d3e7d245330dbc7656f3ef38f
 ┃ ┃ ┣ 📂a0
 ┃ ┃ ┃ ┗ 📜e956f7bdd0a7508db633c9224a506fe9caadc2
 ┃ ┃ ┣ 📂a1
 ┃ ┃ ┃ ┗ 📜6ba58ee4aea959665d48b1de435071a31900fa
 ┃ ┃ ┣ 📂a2
 ┃ ┃ ┃ ┣ 📜403371e59b840ea7093b81fe2157d860315e05
 ┃ ┃ ┃ ┗ 📜640ea6032573ad9c68bdf70cd2b66dea2c52e4
 ┃ ┃ ┣ 📂a4
 ┃ ┃ ┃ ┗ 📜b36fad2bc66fd24e98cccf80c9847a76e84783
 ┃ ┃ ┣ 📂a5
 ┃ ┃ ┃ ┗ 📜10fc19eca9aef80e793306a94acb721a8502d8
 ┃ ┃ ┣ 📂a6
 ┃ ┃ ┃ ┣ 📜0709ad0a1fcf70fbef492b61f4895696501bac
 ┃ ┃ ┃ ┗ 📜dc6b0b26b0ab0c5c1654ee89fe33235d36ce69
 ┃ ┃ ┣ 📂a7
 ┃ ┃ ┃ ┗ 📜156761592d298c7d37163c268a7d3d43dfeabc
 ┃ ┃ ┣ 📂a9
 ┃ ┃ ┃ ┗ 📜ae39a4bfdd85fbdf3a12ac047e79442ed95e54
 ┃ ┃ ┣ 📂aa
 ┃ ┃ ┃ ┗ 📜5bd81854569eae099141a7f5116574925c6f65
 ┃ ┃ ┣ 📂ad
 ┃ ┃ ┃ ┗ 📜c6ab9571b156a013837dac089da378ebff52bc
 ┃ ┃ ┣ 📂ae
 ┃ ┃ ┃ ┗ 📜797dcce29f4f3561f4869d4514cc8d8ff23047
 ┃ ┃ ┣ 📂b0
 ┃ ┃ ┃ ┗ 📜88c83e5c4251854b633b935afdb39c9cce6bdf
 ┃ ┃ ┣ 📂b1
 ┃ ┃ ┃ ┣ 📜95ab4a762639c7226443a302ad5465eafef242
 ┃ ┃ ┃ ┗ 📜999d9a952391103954e16286996e009a631df6
 ┃ ┃ ┣ 📂b2
 ┃ ┃ ┃ ┗ 📜00dda5f810ed6a2c5396b74aea98d07ed46484
 ┃ ┃ ┣ 📂b3
 ┃ ┃ ┃ ┗ 📜c736c4d6fea587309c9ed76e8baba6950b8365
 ┃ ┃ ┣ 📂b5
 ┃ ┃ ┃ ┣ 📜74e08d5920fb9f6736dcfaa505099d3e225a6d
 ┃ ┃ ┃ ┗ 📜b1e385296e363baa1e6e66f3a06d61cae80c22
 ┃ ┃ ┣ 📂b7
 ┃ ┃ ┃ ┗ 📜26eb26fc51eb6e230bec1ff881d4c80bcef536
 ┃ ┃ ┣ 📂b9
 ┃ ┃ ┃ ┗ 📜82c8cbdcfefb40351bf7047da70f53eb5de37a
 ┃ ┃ ┣ 📂bb
 ┃ ┃ ┃ ┣ 📜0096ed459c0603620b84b30c3450e7d34a2cb4
 ┃ ┃ ┃ ┗ 📜a44756b734f23e2497b9c1b296a192ee3f6dc7
 ┃ ┃ ┣ 📂bd
 ┃ ┃ ┃ ┗ 📜ef910ba608e147f682c51dcbfa5668a5994632
 ┃ ┃ ┣ 📂c0
 ┃ ┃ ┃ ┗ 📜23430f3c10dfff4b880816c43791421bf1d18b
 ┃ ┃ ┣ 📂c1
 ┃ ┃ ┃ ┗ 📜e40001eecb87a9dfe59e9f0ba5e05421d897e0
 ┃ ┃ ┣ 📂c3
 ┃ ┃ ┃ ┗ 📜5e1da131ba699bf78a3bbb2979ce9fb4688597
 ┃ ┃ ┣ 📂c4
 ┃ ┃ ┃ ┣ 📜669388e21d0b4bfc7ff587654079c0a335dd08
 ┃ ┃ ┃ ┗ 📜d55660efcc6caee4e5ae84293c924b770d4e80
 ┃ ┃ ┣ 📂c6
 ┃ ┃ ┃ ┗ 📜a71281db9a00194f0fb2a1ac0b523e57af8ab5
 ┃ ┃ ┣ 📂c7
 ┃ ┃ ┃ ┗ 📜253cfc9e7d3d358648b5ae37849f01dc84b7bc
 ┃ ┃ ┣ 📂c8
 ┃ ┃ ┃ ┣ 📜8c6c5d55a22a640770321ae45b22336711ec03
 ┃ ┃ ┃ ┗ 📜a0dd95c65ee58ac75a778e5c597c4777ccf40a
 ┃ ┃ ┣ 📂ca
 ┃ ┃ ┃ ┣ 📜db9bdf09102f54478be5e80e04fcbde3b65374
 ┃ ┃ ┃ ┗ 📜f6a77aaec205e64603b1982f2b21596005ed4e
 ┃ ┃ ┣ 📂cd
 ┃ ┃ ┃ ┗ 📜96459ea8ea8b774463a35546e5ebff346cc92d
 ┃ ┃ ┣ 📂ce
 ┃ ┃ ┃ ┗ 📜24cae329dda5c12db3697f3961b077f538846e
 ┃ ┃ ┣ 📂cf
 ┃ ┃ ┃ ┣ 📜01b2fc9ad365445565edad8f6f25bca865a0a5
 ┃ ┃ ┃ ┗ 📜1dfb6388bb3bc290fd47d8fa1b5a6f27e721d3
 ┃ ┃ ┣ 📂d1
 ┃ ┃ ┃ ┗ 📜370e82a894fce338f511474468a6267eee0022
 ┃ ┃ ┣ 📂d2
 ┃ ┃ ┃ ┣ 📜1fdb76be51bc2b72a66a30e7573e28d19356ca
 ┃ ┃ ┃ ┣ 📜33e93a653b9c5ea798cd92f17d30c0f6ad4f24
 ┃ ┃ ┃ ┗ 📜9661fb9c494dfbcb7b717bcb3722e9f1dd24c3
 ┃ ┃ ┣ 📂d3
 ┃ ┃ ┃ ┣ 📜964de16b1989018c048ebf890d00a8dc3a8cfa
 ┃ ┃ ┃ ┗ 📜ff2e66d0a3f65f7d0efa9d56975d92cd80c5ef
 ┃ ┃ ┣ 📂d5
 ┃ ┃ ┃ ┣ 📜2485ab60f0f9d2fc77e99123e62f58dfdd9fc4
 ┃ ┃ ┃ ┗ 📜9c1e27f6a05946cf5e2d5d9441b87ed4b135dc
 ┃ ┃ ┣ 📂d6
 ┃ ┃ ┃ ┣ 📜57c563cb4c40fb0cc2e03773407fdb83e53025
 ┃ ┃ ┃ ┗ 📜78024b692078cef79fc4946f79e7aa208f80b4
 ┃ ┃ ┣ 📂d8
 ┃ ┃ ┃ ┗ 📜61a32696b0b2295c6bbb79c51dc159027ff8be
 ┃ ┃ ┣ 📂d9
 ┃ ┃ ┃ ┣ 📜6890bb9a5a7776e8e433c5ec004ccb1cbc8ab5
 ┃ ┃ ┃ ┗ 📜e94cf025d2b1dd18082a999b45675b1c2d75cd
 ┃ ┃ ┣ 📂da
 ┃ ┃ ┃ ┗ 📜251df9f5752a33b1267eb8b0d488fd7c88d1fe
 ┃ ┃ ┣ 📂db
 ┃ ┃ ┃ ┗ 📜5b3733534f31b06a0f15dd8ed13a609a87e66c
 ┃ ┃ ┣ 📂e0
 ┃ ┃ ┃ ┗ 📜9e18b32b717d4838fb2a12d1d70a9d95afecc1
 ┃ ┃ ┣ 📂e5
 ┃ ┃ ┃ ┣ 📜0d991f77ddaef9f495e2562760153e9dac6946
 ┃ ┃ ┃ ┗ 📜fa0a87a02b7c4ab691158d08a9d199318e8fd8
 ┃ ┃ ┣ 📂e6
 ┃ ┃ ┃ ┗ 📜9de29bb2d1d6434b8b29ae775ad8c2e48c5391
 ┃ ┃ ┣ 📂e7
 ┃ ┃ ┃ ┣ 📜2bff5f7481c10ecedf9479b6b7150daf521440
 ┃ ┃ ┃ ┣ 📜38a5cc197b0632b512c13df0da82ab17880406
 ┃ ┃ ┃ ┗ 📜41e56ff6f6f7752ef947daee3de162ef0712e6
 ┃ ┃ ┣ 📂e8
 ┃ ┃ ┃ ┗ 📜681747b99dc549d92454370cca1e3400f31c98
 ┃ ┃ ┣ 📂e9
 ┃ ┃ ┃ ┗ 📜e3853d19473a495dc683e9afea560d103d95c8
 ┃ ┃ ┣ 📂eb
 ┃ ┃ ┃ ┗ 📜4009c909685cc610a7bd05e617bba108ec325b
 ┃ ┃ ┣ 📂ec
 ┃ ┃ ┃ ┗ 📜e61f7eba80e16888e2288b7e578a8186cff7b4
 ┃ ┃ ┣ 📂ef
 ┃ ┃ ┃ ┗ 📜93a06f359c586dc70ebfc68416e7679bf7dbea
 ┃ ┃ ┣ 📂f1
 ┃ ┃ ┃ ┗ 📜cef18abb876d489214b491f2ca375ed653eb92
 ┃ ┃ ┣ 📂f3
 ┃ ┃ ┃ ┗ 📜6e2550c86bda525cb36a5ed6f8069a2cb2b6ce
 ┃ ┃ ┣ 📂f5
 ┃ ┃ ┃ ┣ 📜03841281396f313173c5b175db62765bfea2d8
 ┃ ┃ ┃ ┗ 📜910accbd74fe69cd11126a1c404e121881148a
 ┃ ┃ ┣ 📂f6
 ┃ ┃ ┃ ┣ 📜1d34794dcbcc635a85b5dadac10728c44c4004
 ┃ ┃ ┃ ┗ 📜94412f70b1903b1e7d8cbdee367c79128960fa
 ┃ ┃ ┣ 📂fa
 ┃ ┃ ┃ ┣ 📜3aa33143b98246e1a289d482473b6a6b8604c4
 ┃ ┃ ┃ ┗ 📜3ec34a32762acfc63ace2751d8ee4c55f4c3f6
 ┃ ┃ ┣ 📂fb
 ┃ ┃ ┃ ┗ 📜befb1276a7c32f3bbad60c57a8b02215561367
 ┃ ┃ ┣ 📂fc
 ┃ ┃ ┃ ┗ 📜d739ae3fdd3d3f934ae99a067e2c2d7cc24d87
 ┃ ┃ ┣ 📂fe
 ┃ ┃ ┃ ┗ 📜1646d319c0e52f70e8157acc5283f7c4a168a8
 ┃ ┃ ┣ 📂ff
 ┃ ┃ ┃ ┗ 📜ebae0280afb407503bb7e9e58e4103ed057a2d
 ┃ ┃ ┣ 📂info
 ┃ ┃ ┗ 📂pack
 ┃ ┣ 📂refs
 ┃ ┃ ┣ 📂heads
 ┃ ┃ ┃ ┣ 📜akbar-filmopedia
 ┃ ┃ ┃ ┗ 📜main
 ┃ ┃ ┣ 📂remotes
 ┃ ┃ ┃ ┗ 📂origin
 ┃ ┃ ┃ ┃ ┣ 📜akbar-filmopedia
 ┃ ┃ ┃ ┃ ┣ 📜jabal-filmopedia
 ┃ ┃ ┃ ┃ ┗ 📜main
 ┃ ┃ ┗ 📂tags
 ┃ ┣ 📜COMMIT_EDITMSG
 ┃ ┣ 📜config
 ┃ ┣ 📜description
 ┃ ┣ 📜FETCH_HEAD
 ┃ ┣ 📜HEAD
 ┃ ┣ 📜index
 ┃ ┗ 📜ORIG_HEAD
 ┣ 📂admin
 ┣ 📂assets
 ┃ ┣ 📂css
 ┃ ┃ ┗ 📜styles.css
 ┃ ┣ 📂img
 ┃ ┃ ┣ 📜backgroundHero.jpg
 ┃ ┃ ┣ 📜catchMeIfYouCanCard.jpg
 ┃ ┃ ┣ 📜dunkirkCarousel.jpg
 ┃ ┃ ┣ 📜inglouriousBasterdsCarousel.jpg
 ┃ ┃ ┣ 📜johnwickCarousel.jpg
 ┃ ┃ ┣ 📜johnwickPoster.jpg
 ┃ ┃ ┣ 📜savingPrivateRyanCard.jpg
 ┃ ┃ ┗ 📜savingPrivateRyanCarousel.jpg
 ┃ ┗ 📂js
 ┣ 📂bootstrap
 ┃ ┣ 📂css
 ┃ ┃ ┣ 📜bootstrap-grid.css
 ┃ ┃ ┣ 📜bootstrap-grid.css.map
 ┃ ┃ ┣ 📜bootstrap-grid.min.css
 ┃ ┃ ┣ 📜bootstrap-grid.min.css.map
 ┃ ┃ ┣ 📜bootstrap-grid.rtl.css
 ┃ ┃ ┣ 📜bootstrap-grid.rtl.css.map
 ┃ ┃ ┣ 📜bootstrap-grid.rtl.min.css
 ┃ ┃ ┣ 📜bootstrap-grid.rtl.min.css.map
 ┃ ┃ ┣ 📜bootstrap-reboot.css
 ┃ ┃ ┣ 📜bootstrap-reboot.css.map
 ┃ ┃ ┣ 📜bootstrap-reboot.min.css
 ┃ ┃ ┣ 📜bootstrap-reboot.min.css.map
 ┃ ┃ ┣ 📜bootstrap-reboot.rtl.css
 ┃ ┃ ┣ 📜bootstrap-reboot.rtl.css.map
 ┃ ┃ ┣ 📜bootstrap-reboot.rtl.min.css
 ┃ ┃ ┣ 📜bootstrap-reboot.rtl.min.css.map
 ┃ ┃ ┣ 📜bootstrap-utilities.css
 ┃ ┃ ┣ 📜bootstrap-utilities.css.map
 ┃ ┃ ┣ 📜bootstrap-utilities.min.css
 ┃ ┃ ┣ 📜bootstrap-utilities.min.css.map
 ┃ ┃ ┣ 📜bootstrap-utilities.rtl.css
 ┃ ┃ ┣ 📜bootstrap-utilities.rtl.css.map
 ┃ ┃ ┣ 📜bootstrap-utilities.rtl.min.css
 ┃ ┃ ┣ 📜bootstrap-utilities.rtl.min.css.map
 ┃ ┃ ┣ 📜bootstrap.css
 ┃ ┃ ┣ 📜bootstrap.css.map
 ┃ ┃ ┣ 📜bootstrap.min.css
 ┃ ┃ ┣ 📜bootstrap.min.css.map
 ┃ ┃ ┣ 📜bootstrap.rtl.css
 ┃ ┃ ┣ 📜bootstrap.rtl.css.map
 ┃ ┃ ┣ 📜bootstrap.rtl.min.css
 ┃ ┃ ┗ 📜bootstrap.rtl.min.css.map
 ┃ ┗ 📂js
 ┃ ┃ ┣ 📜bootstrap.bundle.js
 ┃ ┃ ┣ 📜bootstrap.bundle.js.map
 ┃ ┃ ┣ 📜bootstrap.bundle.min.js
 ┃ ┃ ┣ 📜bootstrap.bundle.min.js.map
 ┃ ┃ ┣ 📜bootstrap.esm.js
 ┃ ┃ ┣ 📜bootstrap.esm.js.map
 ┃ ┃ ┣ 📜bootstrap.esm.min.js
 ┃ ┃ ┣ 📜bootstrap.esm.min.js.map
 ┃ ┃ ┣ 📜bootstrap.js
 ┃ ┃ ┣ 📜bootstrap.js.map
 ┃ ┃ ┣ 📜bootstrap.min.js
 ┃ ┃ ┗ 📜bootstrap.min.js.map
 ┣ 📂functions
 ┃ ┗ 📜functions.php
 ┣ 📜admin.php
 ┣ 📜db_filmopedia (1).sql
 ┣ 📜edit.php
 ┣ 📜footer.php
 ┣ 📜hapus.php
 ┣ 📜header.php
 ┣ 📜index.php
 ┣ 📜login.php
 ┣ 📜logout.php
 ┣ 📜README.md
 ┣ 📜register.php
 ┗ 📜tambah.php
```

## Authors
* Aura Syaskia
* Cut Siti Sarah
* Jabal Akbar
* M Akbar Zulfikar












