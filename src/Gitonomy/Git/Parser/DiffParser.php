            $oldName  = $oldName === '/dev/null' ? null : substr($oldName, 2);
            $newName  = $newName === '/dev/null' ? null : substr($newName, 2);
            $file = new File($oldName, $newName, $oldMode, $newMode, $oldIndex, $newIndex, $isBinary);