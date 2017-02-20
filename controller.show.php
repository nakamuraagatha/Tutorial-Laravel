

<?php

// app/controllers/NerdController.php

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // get the nerd
        $nerd = Nerd::find($id);

        // show the view and pass the nerd to it
        return View::make('nerds.show')
            ->with('nerd', $nerd);
    }
