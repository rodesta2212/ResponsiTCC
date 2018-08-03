CREATE TABLE `mahasiswa` (
  `mahasiswa_id` int(11) NOT NULL auto_increment,
  `mahasiswa_nim` int(20) NOT NULL,
  `mahasiswa_nama` varchar(50) NOT NULL,
  `mahasiswa_kelas` varchar(10) NOT NULL,
  `mahasiswa_jurusan` varchar(30) NOT NULL,
  PRIMARY KEY  (`mahasiswa_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;