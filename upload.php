<?php
define( 'DB_HOST', '�z�X�g�����L�q�i�Ⴆ��localhost�j' );
define( 'DB_USER', '���[�U�[�����L�q�i�Ⴆ��root�j' );
define( 'DB_PASS', '�p�X���[�h���L�q' );
define( 'DB_NAME', '�f�[�^�x�[�X�����L�q' );
{
    // DB�Ɏ�荞�މ摜�̃p�X
�@�@$img_path = 'http://ecx.images-amazon.com/images/I/61vSkV4-rwL.jpg';//��Ƃ��āA���̎���Ԕ���Ă�{�̉摜�ɂ��Ă����܂����B
	 
    // �f�[�^�x�[�X�ɐڑ�
    $DB = mysql_connect( DB_HOST, DB_USER, DB_PASS );
    mysql_select_db( DB_NAME, $DB );
 
    // �摜�̎擾
    $image = file_get_contents( $img_path );
 
    // SQL���̍쐬
    $sql = sprintf( 'INSERT INTO temp_upload (image ) VALUES ( "%s" )',
                    mysql_real_escape_string( $image ) );
�@�@
�@�@// SQL���̎��s
    $result = mysql_query( $sql );
}
?>