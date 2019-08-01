<?php
class C
{
	public static function _( $Key, $Collection, $Default = '' )
	{
		return self::getValue( $Key, (array) $Collection, $Default );

	}

	protected static function getValue( $Key, $Collection, $Default = '' )
	{
		$Keys = explode( '.', $Key );
		$Data = $Collection;
		foreach ( $Keys as $K )
		{
			if ( is_object( $Data ) )
			{
				$Data = (array) $Data;
			}
			if ( !isset( $Data[$K] ) )
			{
				return $Default;
			}
			$Data = $Data[$K];
		}
		return $Data;

	}


}
