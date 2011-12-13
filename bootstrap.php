<?php

/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Stripe
 * @version    1.0
 * @author     
 * @license    MIT License
 * @copyright  
 * @link       
 */

Autoloader::add_classes(array(
	
	'Stripe\\Stripe'                     => __DIR__.'/classes/stripe.php',

	'Stripe\\Stripe_ApiConnectionError'  => __DIR__.'/classes/stripe/apiconnectionerror.php',
	'Stripe\\Stripe_ApiError'            => __DIR__.'/classes/stripe/apierror.php',
	'Stripe\\Stripe_ApiRequestor'        => __DIR__.'/classes/stripe/apirequestor.php',
	'Stripe\\Stripe_ApiResource'         => __DIR__.'/classes/stripe/apiresource.php',
	'Stripe\\Stripe_AuthenticationError' => __DIR__.'/classes/stripe/authenticationerror.php',
	'Stripe\\Stripe_CardError'           => __DIR__.'/classes/stripe/carderror.php',
	'Stripe\\Stripe_Charge'              => __DIR__.'/classes/stripe/charge.php',
	'Stripe\\Stripe_Coupon'              => __DIR__.'/classes/stripe/coupon.php',
	'Stripe\\Stripe_Customer'            => __DIR__.'/classes/stripe/customer.php',
	'Stripe\\Stripe_Error'               => __DIR__.'/classes/stripe/error.php',
	'Stripe\\Stripe_InvalidRequestError' => __DIR__.'/classes/stripe/invalidrequesterror.php',
	'Stripe\\Stripe_Invoice'             => __DIR__.'/classes/stripe/invoice.php',
	'Stripe\\Stripe_InvoiceItem'         => __DIR__.'/classes/stripe/invoiceerror.php',
	'Stripe\\Stripe_Object'              => __DIR__.'/classes/stripe/object.php',
	'Stripe\\Stripe_Plan'                => __DIR__.'/classes/stripe/plan.php',
	'Stripe\\Stripe_Token'               => __DIR__.'/classes/stripe/token.php',
	'Stripe\\Stripe_Util'                => __DIR__.'/classes/stripe/util.php',

	'Stripe\\Stripe_Util_Set'            => __DIR__.'/classes/stripe/util/set.php',
));
