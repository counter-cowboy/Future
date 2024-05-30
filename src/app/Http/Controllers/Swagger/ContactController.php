<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Resources\Contact\ContactResource;
use App\Models\Contact;
use OpenApi\Annotations as OA;
/**
 * @OA\Info(
 *     title="API docs",
 *     version="1.1"
 * ),
 * @OA\PathItem(
 *     path="/api/"
 * )
 *
 *
 * @OA\Get(
 *     path="/api/v1/notebook",
 *     summary="Index-view for contacts",
 *     tags={"Contacts get all"},
 *
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="none"
 *         ),
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent()
 *     ),
 * ),
 *
 * @OA\Post(
 *      path="/api/v1/notebook",
 *      summary="Create new contact",
 *      tags={"Contacts post"},
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property( property="fio", type="string", example="some name"),
 *                      @OA\Property( property="company", type="string", example="some company"),
 *                      @OA\Property( property="phone_number", type="string", example="+44 56-654-33"),
 *                      @OA\Property( property="email", type="string", example="some@email.doc"),
 *                      @OA\Property( property="birth_date", type="string", example="2002-01-09"),
 *                      @OA\Property( property="photo", type="string", example="D:/Images/photo_some_34.jpeg"),
 *                  )
 *              }
 *          )
 *      ),
 *
 *      @OA\Response(
 *          response=200,
 *          description="OK"
 *      ),
 *  ),
 *
 * @OA\Get(
 *      path="/api/v1/notebook/5",
 *      summary="Get contact by ID",
 *      tags={"Contacts get contact"},
 *
 *      @OA\RequestBody(
 *
 *      ),
 *
 *      @OA\Response(
 *          response=200,
 *          description="OK"
 *      ),
 *  ),
 *
 * @OA\Post(
 *       path="/api/v1/notebook/5/edit",
 *       summary="Update contact",
 *       tags={"Contacts patch"},
 *       @OA\RequestBody(
 *           @OA\JsonContent(
 *               allOf={
 *                   @OA\Schema(
 *                       @OA\Property( property="fio", type="string", example="some 5 name"),
 *                       @OA\Property( property="company", type="string", example="some 5 company"),
 *                       @OA\Property( property="phone_number", type="string", example="+44 546-654-33"),
 *                       @OA\Property( property="email", type="string", example="some@email.doc"),
 *                       @OA\Property( property="birth_date", type="string", example="2002-01-09"),
 *                       @OA\Property( property="photo", type="string", example="D:/Images/photo_some_55.jpeg"),
 *                   )
 *               }
 *           )
 *       ),
 *
 *       @OA\Response(
 *           response=200,
 *           description="OK"
 *       ),
 *   ),
 *
 * @OA\Delete(
 *       path="/api/v1/notebook/5",
 *       summary="Delete contact by ID",
 *       tags={"Contacts delete contact"},
 *
 *       @OA\RequestBody(),
 *
 *       @OA\Response(
 *           response=200,
 *           description="OK"
 *       ),
 *   ),
 *
 *
 */
class ContactController extends Controller
{

}
