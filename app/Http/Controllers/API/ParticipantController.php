<?php

    namespace App\Http\Controllers\API;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Participant;

    class ParticipantController extends Controller {

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index() {
            return Participant::all();
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request) {
           /**
            * TODO: Remove me
            $val1 = new Participant([
                'first_name' => 'Иван',
                'last_name' => "Иванов",
                'email' => "mail@mail.com"
            ]);
            $val1->save();

            $val2 = new Participant([
                'first_name' => 'Петр',
                'last_name' => "Петров",
                'email' => "mail@mail.com"
            ]);
            $val2->save();
*/
            $participant = new Participant([
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('email'),
            ]);

            $participant->save();
        }

        /**
         * Display the specified resource.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function show($id) {
            return Participant::find($id);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id) {
            $participant = Participant::find($id);

            $participant->first_name = $request->get('first_name');
            $participant->last_name = $request->get('last_name');
            $participant->email = $request->get('email');

            $participant->save();
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id) {
            Participant::find($id)->delete();
        }
    }
