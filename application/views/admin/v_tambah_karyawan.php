function detail_divisi($id){
            
            echo $id;
            $where = array('karyawan.id_divisi' => $id);
            // kode di bawah ini adalah kode yang mengambil data user berdasarkan id dan disimpan kedalam array $data dengan index bernama user
            $resultKaryawan = $this->m_data_janji->tampil_karyawan_where($where,'karyawan')->result();
            // kode ini memuat vie edit dan membawa data hasil query diatas
            $data = array(
                'karyawan' => $resultKaryawan
            );

            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_detail_karyawan',$data);
            $this->load->view('admin/templates/footer');
        }