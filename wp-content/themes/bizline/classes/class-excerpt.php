<?php
/**
* Bizline: Excerpt
*
* @since Bizline: 1.0.0
*/
if( ! class_exists( 'Bizline_Excerpt' ) ):

class Bizline_Excerpt{

    /**
    * Default length (by WordPress)
    *
    * @since Bizline 1.0.0
    * @access public
    * @var int
    */
    public $length = 55;

    /**
    * Read more Text for excerpt
    * @since Bizline 1.0.0
    * @access public
    * @var string
    */
    public $more_text = '';

    /**
    * So you can call: bizline_excerpt( 'short' );
    *
    * @since  Bizline 1.0.0
    * @access protected
    * @var    array
    */
    protected $types = array(
        'short'   => 25,
        'regular' => 55,
        'long'    => 100
    );

    /**
    * Stores class instance
    * 
    * @since  Bizline 1.0.0
    * @access protected
    * @var    object
    */
    protected static $instance = NULL;

    /**
    * Retrives the instance of this class
    * 
    * @since  Bizline 1.0.0
    * @access public
    * @return object
    */
    public static function get_instance() {

        if ( ! self::$instance ) {
          self::$instance = new self();
        }

        return self::$instance;
    }

    /**
    * Sets the length for the excerpt,then it adds the WP filter
    * And automatically calls the_excerpt();
    *
    * @since Bizline 1.0.0
    * @param string $new_length 
    * @access public
    * @return void
    */
    public function excerpt( $new_length = 55, $echo, $more_text, $page_id ) {

        $this->length    = $new_length;
        $this->more_text = $more_text;
        add_filter( 'excerpt_more', array( $this, 'new_excerpt_more' ) );
        add_filter( 'excerpt_length', array( $this, 'new_length' ) );

        if( $echo ){
          the_excerpt();
        }else{
            $content = $page_id ?  get_the_excerpt( $page_id ) :  get_the_excerpt();
            remove_filter( 'excerpt_more', array( $this, 'new_excerpt_more' ) );
            remove_filter( 'excerpt_length', array( $this, 'new_length' ) );
            return $content;
        }
    
    }

    public function new_excerpt_more( $more ){
        if( is_admin() ){
            return $more;
        }
        return $this->more_text;
    }

    /** 
    * Tells WP the new length
    *
    * @since Bizline 1.0.0
    * @access public
    * @return int
    */
    public function new_length( $length ) {
        if( is_admin() ){
            return $length;
        }

        if( isset( $this->types[ $this->length ] ) ){
          return $this->types[ $this->length ];
        }else{
          return $this->length;
        }
    }
}

endif;

/**
* Call to Bizline_Excerpt
*
* @since  1.0.0
* @uses   Bizline_Excerpt:::get_instance()->excerpt()
* @param  int $length
* @return void
*/
if( ! function_exists( 'bizline_excerpt' ) ):

    function bizline_excerpt( $length = 55, $echo = true, $more = '', $page_id = false ) {
        $length = apply_filters( 'bizline_custom_excerpt_length', $length );
        return Bizline_Excerpt::get_instance()->excerpt( $length, $echo, $more, $page_id );
    }
endif;