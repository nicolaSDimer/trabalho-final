package com.matheus.testecale

import android.os.Bundle
import android.util.Log
import androidx.fragment.app.Fragment
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.RadioButton
import android.widget.Toast
import androidx.core.os.bundleOf
import androidx.navigation.fragment.findNavController
import com.matheus.testecale.databinding.FragmentFirstBinding
import com.matheus.testecale.databinding.FragmentFourBinding
import com.matheus.testecale.databinding.FragmentMatchBinding
import com.matheus.testecale.databinding.FragmentSixBinding
import com.matheus.testecale.databinding.FragmentHomeBinding
import com.matheus.testecale.databinding.FragmentSecondBinding
import kotlinx.coroutines.flow.callbackFlow
import kotlinx.coroutines.selects.whileSelect
import com.matheus.testecale.home as home1


/**
 * A simple [Fragment] subclass as the default destination in the navigation.
 */
class match : Fragment() {

    private var _binding: FragmentMatchBinding? = null

    // This property is only valid between onCreateView and
    // onDestroyView.
    private val binding get() = _binding!!


    override fun onCreateView(inflater: LayoutInflater, container: ViewGroup?, savedInstanceState: Bundle?): View? {

        _binding = FragmentMatchBinding.inflate(inflater, container, false)
        return binding.root


    }

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)

        binding.imageView4.setOnClickListener{
            findNavController().navigate(R.id.home2)
        }
        binding.imageView5.setOnClickListener{
            findNavController().navigate(R.id.chat)
        }
    }


    override fun onDestroyView() {
        super.onDestroyView()
        _binding = null
    }
}

