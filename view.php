<?php
define( 'DB_HOST', '�z�X�g�����L�q�i�Ⴆ��localhost�j' );
define( 'DB_USER', '���[�U�[�����L�q�i�Ⴆ��root�j' );
define( 'DB_PASS', '�p�X���[�h���L�q' );
define( 'DB_NAME', '�f�[�^�x�[�X�����L�q' );
{
  // �f�[�^�x�[�X�ɐڑ�
  $DB = mysql_connect( DB_HOST, DB_USER, DB_PASS );
  mysql_select_db( DB_NAME, $DB );
 
  // �\������C���[�W��ID���p�����[�^����擾
  $id = isset( $_GET['id'] ) ? intval( $_GET['id'] ) : 0;
  $sql = sprintf( 'SELECT * FROM temp_upload WHERE id = %d', $id );
 
  // �f�[�^�̎擾
  $result = mysql_query( $sql );
  $row = mysql_fetch_array( $result, MYSQL_ASSOC );
 
  // �摜���o��
  header( 'Content-Type: image/jpeg' );
  print $row['image'];
}
?>