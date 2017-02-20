<?php

// app/controllers/NerdController.php

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the nerd
        $nerd = Nerd::find($id);

        // show the edit form and pass the nerd
        return View::make('nerds.edit')
            ->with('nerd', $nerd);
    }
